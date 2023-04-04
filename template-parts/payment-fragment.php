<div class="container">
  <?php
    if (get_field('assigned_payment')) {
      the_title('<h2 class="payment__title">', '</h2>');
    } else {
      ?>
        <h2 class="payment__title"><?php echo get_field('_free_donat', 'options'); ?></h2>
      <?php
    }
  ?>

  
  <p class="payment__text"><?php echo get_field('_choose_convenient_payment_method', 'options'); ?></p>
  

  <?php 
    $lickPayLanguage;

    if (get_user_locale() == "en_US") {
      $lickPayLanguage = "en";
    } else {
      $lickPayLanguage = "uk";
    }


    $privateKey = 'nbQMCMfSOSnfgc3dtXwQ0kAx18kfvnxaC4R2NFK6';
    $publicKey = 'i72804033909';
    $descriptionAmount = get_field('assigned_payment') ? get_field('assigned_payment') : get_field('_free_donat', 'options');

    $params = [
        'action' => 'paydonate',
        'amount' => 0,
        'currency' => 'UAH',
        'description' => $descriptionAmount,
        'order_id' => 'order_id_2 ' . time(),
        'version' => 3,
        'public_key' => $publicKey,
        'private_key' => $privateKey
    ];

    $data = base64_encode(json_encode($params));
    $signature = base64_encode(sha1($privateKey . $data . $privateKey, 1));
  
  ?>

  <div class="payment__inner">
    <div class="boxs-payment">
      <div class="boxs-payment__navigation">
        <button class="boxs-payment__navigation-btn">
          <span
            ><?php echo get_field('by_map_button_tabs', 'options'); ?>
            <svg
              width="25"
              height="24"
              viewBox="0 0 25 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                class="active-path-fill"
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M2.50174 10H22.4983C22.4862 7.82497 22.3897 6.64706 21.6213 5.87868C20.7426 5 19.3284 5 16.5 5H8.5C5.67157 5 4.25736 5 3.37868 5.87868C2.6103 6.64706 2.51384 7.82497 2.50174 10ZM22.5 12H2.5V14C2.5 16.8284 2.5 18.2426 3.37868 19.1213C4.25736 20 5.67157 20 8.5 20H16.5C19.3284 20 20.7426 20 21.6213 19.1213C22.5 18.2426 22.5 16.8284 22.5 14V12ZM7.5 15C6.94772 15 6.5 15.4477 6.5 16C6.5 16.5523 6.94772 17 7.5 17H7.51C8.06228 17 8.51 16.5523 8.51 16C8.51 15.4477 8.06228 15 7.51 15H7.5Z"
                fill="#CED4DA"
              />
            </svg>
          </span>
        </button>
        <button class="boxs-payment__navigation-btn">
          <span
            ><?php echo get_field('bank_sale_button_tabs', 'options'); ?>

            <svg
              width="25"
              height="24"
              viewBox="0 0 25 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                class="active-path-fill"
                d="M21.5 3V1.5H23V3H21.5ZM12.5607 14.0607C11.9749 14.6464 11.0251 14.6464 10.4393 14.0607C9.85355 13.4749 9.85355 12.5251 10.4393 11.9393L12.5607 14.0607ZM20 11V3H23V11H20ZM21.5 4.5H13.5V1.5H21.5V4.5ZM22.5607 4.06066L12.5607 14.0607L10.4393 11.9393L20.4393 1.93934L22.5607 4.06066Z"
                fill="#CED4DA"
              />
              <path
                class="active-path-stroke"
                d="M20.5 15V15C20.5 16.8692 20.5 17.8038 20.0981 18.5C19.8348 18.9561 19.4561 19.3348 19 19.5981C18.3038 20 17.3692 20 15.5 20H10.5C7.67157 20 6.25736 20 5.37868 19.1213C4.5 18.2426 4.5 16.8284 4.5 14V9C4.5 7.13077 4.5 6.19615 4.90192 5.5C5.16523 5.04394 5.54394 4.66523 6 4.40192C6.69615 4 7.63077 4 9.5 4V4"
                stroke="#CED4DA"
                stroke-width="3"
                stroke-linecap="round"
              />
            </svg>
          </span>
        </button>
        <!-- <button class="boxs-payment__navigation-btn">
          <span
            >PayPal
            <svg
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <g clip-path="url(#clip0_89_6929)">
                <path
                  class="active-path-fill"
                  d="M7.76325 12.0915C7.76325 12.6 7.359 12.987 6.84675 12.987C6.4635 12.987 6.18 12.7703 6.18 12.3623C6.18 11.8538 6.576 11.4458 7.0845 11.4458C7.47225 11.4458 7.764 11.6835 7.764 12.0915H7.76325ZM3.35475 10.071H3.159C3.09675 10.071 3.03375 10.113 3.0255 10.1835L2.84625 11.2965L3.18825 11.2838C3.6465 11.2838 4.0005 11.2215 4.08375 10.692C4.17975 10.1333 3.82575 10.071 3.35475 10.071ZM15.1882 10.071H15.0007C14.9257 10.071 14.8755 10.113 14.8673 10.1835L14.6925 11.2965L15.0255 11.2838C15.567 11.2838 15.942 11.1585 15.942 10.5338C15.9375 10.092 15.5422 10.071 15.1875 10.071H15.1882ZM24.0007 4.66651V19.3335C24.0006 19.8639 23.7897 20.3726 23.4147 20.7477C23.0396 21.1228 22.5309 21.3336 22.0005 21.3338H2.00025C1.46981 21.3336 0.961156 21.1228 0.586079 20.7477C0.211003 20.3726 0.000198778 19.8639 0 19.3335V4.66651C0.000198778 4.13607 0.211003 3.62742 0.586079 3.25234C0.961156 2.87726 1.46981 2.66646 2.00025 2.66626H22.0005C22.5309 2.66646 23.0396 2.87726 23.4147 3.25234C23.7897 3.62742 24.0006 4.13607 24.0007 4.66651ZM5.34675 10.308C5.34675 9.43276 4.67175 9.14101 3.90075 9.14101H2.23425C2.18042 9.14142 2.12861 9.16158 2.08865 9.19767C2.0487 9.23375 2.02338 9.28325 2.0175 9.33676L1.33425 13.5908C1.3215 13.674 1.3845 13.7573 1.46775 13.7573H2.25975C2.37225 13.7573 2.4765 13.6365 2.48925 13.5195L2.67675 12.411C2.71875 12.111 3.2265 12.2153 3.42675 12.2153C4.6185 12.2153 5.3475 11.5073 5.3475 10.3073L5.34675 10.308ZM8.85525 10.6748H8.06325C7.905 10.6748 7.89675 10.9043 7.8885 11.0168C7.647 10.6628 7.29675 10.5998 6.90075 10.5998C5.88 10.5998 5.10075 11.4953 5.10075 12.483C5.10075 13.2953 5.60925 13.8248 6.4215 13.8248C6.7965 13.8248 7.263 13.6208 7.5255 13.329C7.50126 13.4133 7.48716 13.5001 7.4835 13.5878C7.4835 13.6838 7.5255 13.7543 7.617 13.7543H8.334C8.4465 13.7543 8.5425 13.6335 8.5635 13.5165L8.98875 10.8375C9.0015 10.758 8.9385 10.6748 8.85525 10.6748ZM10.5428 14.754L13.197 10.8953C13.218 10.8743 13.218 10.8533 13.218 10.8248C13.218 10.7543 13.1557 10.6793 13.0845 10.6793H12.2843C12.247 10.6807 12.2106 10.6909 12.1781 10.709C12.1455 10.7271 12.1176 10.7527 12.0968 10.7835L10.9928 12.4088L10.5345 10.8465C10.5173 10.799 10.4862 10.7577 10.4453 10.728C10.4044 10.6984 10.3555 10.6816 10.305 10.68H9.52575C9.4545 10.68 9.39225 10.755 9.39225 10.8255C9.39225 10.8758 10.2045 13.1925 10.2758 13.413C10.1632 13.5713 9.4215 14.6048 9.4215 14.73C9.4215 14.805 9.48375 14.8635 9.555 14.8635H10.3553C10.3927 14.861 10.429 14.85 10.4616 14.8313C10.4941 14.8126 10.5218 14.7867 10.5428 14.7555V14.754ZM17.1803 10.308C17.1803 9.43276 16.5053 9.14101 15.7343 9.14101H14.0797C14.0243 9.14056 13.9706 9.16011 13.9285 9.19607C13.8863 9.23203 13.8585 9.28198 13.8502 9.33676L13.1752 13.587C13.167 13.6703 13.2292 13.7535 13.3087 13.7535H14.163C14.2462 13.7535 14.3085 13.6913 14.3295 13.62L14.517 12.4118C14.559 12.1118 15.0675 12.216 15.267 12.216C16.4505 12.216 17.1795 11.508 17.1795 10.308H17.1803ZM20.688 10.6748H19.896C19.7377 10.6748 19.7295 10.9043 19.7167 11.0168C19.4872 10.6628 19.1332 10.5998 18.729 10.5998C17.7083 10.5998 16.929 11.4953 16.929 12.483C16.929 13.2953 17.4375 13.8248 18.2498 13.8248C18.6375 13.8248 19.104 13.6208 19.3538 13.329C19.341 13.3913 19.3117 13.5248 19.3117 13.5878C19.3117 13.6838 19.3538 13.7543 19.4452 13.7543H20.166C20.2785 13.7543 20.3745 13.6335 20.3955 13.5165L20.8207 10.8375C20.8335 10.758 20.7705 10.6748 20.6873 10.6748H20.688ZM22.6672 9.28726C22.6672 9.20401 22.605 9.14176 22.5338 9.14176H21.7628C21.7005 9.14176 21.6375 9.19201 21.6292 9.25426L20.9543 13.5878L20.9422 13.6088C20.9422 13.6838 21.0045 13.7543 21.0877 13.7543H21.7755C21.8798 13.7543 21.984 13.6335 21.9923 13.5165L22.6672 9.30001V9.28726ZM18.9172 11.4458C18.4088 11.4458 18.0128 11.85 18.0128 12.3623C18.0128 12.7665 18.3045 12.987 18.6877 12.987C19.188 12.987 19.5922 12.6038 19.5922 12.0915C19.5968 11.6835 19.305 11.4458 18.9172 11.4458Z"
                  fill="#CED4DA"
                />
              </g>
              <defs>
                <clipPath id="clip0_89_6929">
                  <rect width="24" height="24" fill="white" />
                </clipPath>
              </defs>
            </svg>
          </span>
        </button> -->


        <button class="boxs-payment__navigation-btn">
          <span
            ><?php echo get_field('crypta_button_tabs', 'options'); ?>
            <svg  width="28" height="35" version="1.1" viewBox="0 0 700 600" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g class="active-path-fill" fill="#CED4DA">
              <path d="m402.5 148.75v-8.75h35c0.71875 0 1.4258-0.085938 2.1172-0.26172l70-17.5c3.9023-0.97266 6.6328-4.4727 6.6328-8.4883v-35c0-4.8281-3.9102-8.75-8.75-8.75h-105v-16.773c0-2.1953-0.83203-4.3242-2.3281-5.9336l-8.75-9.4766c-1.6445-1.8008-3.9805-2.8164-6.4219-2.8164h-0.92578l-7.1133-28.375c-0.97266-3.8945-4.4727-6.625-8.4883-6.625h-34.965c-4.0078 0-7.5078 2.7305-8.4883 6.6133l-7.125 28.387h-2.8945c-2.4414 0-4.7695 1.0234-6.4297 2.8164l-8.75 9.4766c-1.4883 1.6094-2.3203 3.7383-2.3203 5.9336v18.348l-124.21 24.852c-1.2852 0.25391-2.4844 0.78516-3.5352 1.5742l-35 26.25c-3.0117 2.2578-4.2422 6.1953-3.0547 9.7656 1.1992 3.5781 4.5352 5.9844 8.3047 5.9844h157.54l-0.035156 8.7148c0 1.375 0.31641 2.7227 0.91797 3.9453l8.75 17.5c1.4883 2.9688 4.5156 4.8398 7.832 4.8398h9.1602l-0.72656 186.16c-1.3047 0.75391-2.5547 1.6172-3.6328 2.6875-3.3164 3.2891-5.1523 7.6836-5.1719 12.355l-0.20312 52.352c0 0.015625-0.25391 61.312-0.25391 61.312 0 0.015625-0.19141 52.598-0.19141 52.598-0.035157 9.6406 7.7891 17.516 17.43 17.562l35 0.14062h0.070313c9.6094 0 17.449-7.8047 17.5-17.43l0.64844-166.25c0.027344-6.4492-3.5-12.039-8.6875-15.094l0.71875-186.39h8.3398c3.3164 0 6.3438-1.8711 7.832-4.8398l8.75-17.5c0.60156-1.207 0.91797-2.5547 0.91797-3.9102zm-62.16-131.25h21.316l4.3828 17.492-30.082-0.042969zm-25.34 39.148 3.832-4.1484h58.414 0.015625 3.9023l3.8359 4.1484v13.352h-70zm-136.34 56.543 128.46-25.691h191.63v19.418l-62.328 15.582h-270.17zm153.23 324.24 34.992 0.14062-0.17578 43.75-34.992-0.14062zm0.0625-17.5 0.17578-43.664 35 0.14062-0.16797 43.664zm26.496-61.059-17.5-0.070313 0.71875-183.75 17.5 0.070313zm-26.977 183.64 0.17578-43.836 35.008 0.14062-0.16797 43.836zm53.531-395.83-5.4062 10.816h-59.184l-5.3984-10.797 0.027343-6.668 69.961 0.26953z"/>
              <path d="m332.5 96.25h35v17.5h-35z"/>
              <path d="m525 280c0-52.676-23.398-102.04-64.191-135.45l-11.094 13.535c36.723 30.074 57.785 74.508 57.785 121.91 0 67.734-43.109 127.75-107.27 149.32l5.5742 16.59c71.285-23.977 119.19-90.652 119.19-165.91z"/>
              <path d="m192.5 280c0-44.195 18.742-86.625 51.422-116.43l-11.797-12.934c-36.301 33.109-57.125 80.254-57.125 129.36 0 74.812 47.52 141.36 118.24 165.59l5.6719-16.555c-63.648-21.805-106.41-81.699-106.41-149.03z"/>
              <path d="m514.08 135.33-13.125 11.578c32.438 36.758 50.297 84.023 50.297 133.09 0 91.812-62.004 171.94-150.76 194.87l4.375 16.949c96.496-24.93 163.89-112.03 163.89-211.82 0-53.34-19.418-104.72-54.672-144.67z"/>
              <path d="m148.75 280c0-41.598 12.582-81.523 36.391-115.46l-14.332-10.047c-25.883 36.883-39.559 80.293-39.559 125.5 0 98.926 66.668 185.83 162.12 211.35l4.5234-16.914c-87.816-23.457-149.14-103.43-149.14-194.43z"/>
              <path d="m455 218.75h-52.5v17.5h43.75v26.25c0 4.8281 3.9102 8.75 8.75 8.75h35v-17.5h-26.25v-26.25c0-4.8281-3.9102-8.75-8.75-8.75z"/>
              <path d="m402.5 183.75h35v17.5h-35z"/>
              <path d="m463.75 332.5v-26.25h26.25v-17.5h-35c-4.8398 0-8.75 3.9219-8.75 8.75v26.25h-43.75v17.5h52.5c4.8398 0 8.75-3.9219 8.75-8.75z"/>
              <path d="m402.5 358.75h35v17.5h-35z"/>
              <path d="m411.25 253.75h17.5v52.5h-17.5z"/>
              <path d="m402.5 393.75h17.5v17.5h-17.5z"/>
              <path d="m411.25 148.75h17.5v17.5h-17.5z"/>
              <path d="m236.25 227.5v26.25h-26.25v17.5h35c4.8281 0 8.75-3.9219 8.75-8.75v-26.25h43.75v-17.5h-52.5c-4.8281 0-8.75 3.9219-8.75 8.75z"/>
              <path d="m262.5 183.75h35v17.5h-35z"/>
              <path d="m297.5 323.75h-43.75v-26.25c0-4.8281-3.9219-8.75-8.75-8.75h-35v17.5h26.25v26.25c0 4.8281 3.9219 8.75 8.75 8.75h52.5z"/>
              <path d="m262.5 358.75h35v17.5h-35z"/>
              <path d="m271.25 253.75h17.5v52.5h-17.5z"/>
              <path d="m280 393.75h17.5v17.5h-17.5z"/>
              <path d="m271.25 148.75h17.5v17.5h-17.5z"/>
            </g>
            </svg>
          </span>
        </button>
      </div>

      <div class="boxs__content">
        <div class="content-payment" id="content-card">
          <div class="content-payment__title">
            <?php echo get_field('liqpay_title', 'options'); ?>
          </div>
          <div id="liqpay_checkout" class="content-payment__text">
          </div>
        </div>
        <div class="content-payment" id="content-payment">

          <div class="box-props">
            <div class="box-props__wrapper">
              <div class="box-props__left">
                <div class="props-boxs">
                  <div class="props-boxs__title">
                    <?php echo get_field('bank_payment', 'options'); ?>
                  </div>
                  <div class="props-boxs__text">
                    <span>
                      <?php echo get_field('name_of_recipient', 'options'); ?></span
                    >
                    БО БФ ГАРТ
                  </div>

                  <div class="props-boxs__content">
                    <div class="props-boxs__content-subtitle">
                      <?php echo get_field('recipient_code', 'options'); ?>
                    </div>
                    <div class="props-boxs__content-props">
                      <span class="props-boxs__content-copy"
                        >44855912</span
                      >
                      <button class="props-boxs__content-btn"></button>
                    </div>
                  </div>

                  <div class="props-boxs__content">
                    <div class="props-boxs__content-subtitle">
                      <?php echo get_field('recipient_account', 'options'); ?>
                    </div>
                    <div class="props-boxs__content-props">
                      <span class="props-boxs__content-copy"
                        >UA883052990000026004001611691</span
                      >
                      <button class="props-boxs__content-btn"></button>
                    </div>
                  </div>

                  <div class="props-boxs__text">
                    <span>
                      <?php echo get_field('bank_name', 'options'); ?></span
                    >
                    АТ КБ "ПРИВАТБАНК"
                  </div>
                </div>

                <div class="props-boxs">
                  <div class="props-boxs__title">
                    USD
                  </div>

                  <div class="props-boxs__content">
                    <div class="props-boxs__content-subtitle">
                      Beneficiary:
                    </div>
                    <div class="props-boxs__content-props">
                      <span class="props-boxs__content-copy"
                        >БФ ГАРТ БО</span
                      >
                      <button class="props-boxs__content-btn"></button>
                    </div>
                  </div>

                  <div class="props-boxs__content">
                    <div class="props-boxs__content-subtitle">
                      IBAN Code:
                    </div>
                    <div class="props-boxs__content-props">
                      <span class="props-boxs__content-copy"
                        >UA273052990000026004021612540</span
                      >
                      <button class="props-boxs__content-btn"></button>
                    </div>
                  </div>

                  <div class="props-boxs__content">
                    <div class="props-boxs__content-subtitle">
                      Beneficiary bank:
                    </div>
                    <div class="props-boxs__content-props">
                      <span class="props-boxs__content-copy"
                        >JSC CB "PRIVATBANK", 1D HRUSHEVSKOHO STR., KYIV, 01001, UKRAINE</span
                      >
                      <button class="props-boxs__content-btn"></button>
                    </div>
                  </div>

                  <div class="props-boxs__content">
                    <div class="props-boxs__content-subtitle">
                      Swift code:
                    </div>
                    <div class="props-boxs__content-props">
                      <span class="props-boxs__content-copy"
                        >PBANUA2X</span
                      >
                      <button class="props-boxs__content-btn"></button>
                    </div>
                  </div>


                  <div class="props-boxs__content">
                    <div class="props-boxs__content-subtitle">
                      Beneficiary address:
                    </div>
                    <div class="props-boxs__content-props">
                      <span class="props-boxs__content-copy"
                        >UA 18007 Черкаська   м Черкаси вул. Смiлянська б.123/1</span
                      >
                      <button class="props-boxs__content-btn"></button>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="box-props__right">
                <div class="props-boxs">
                  <div class="props-boxs__title">
                    EUR
                  </div>

                  <div class="props-boxs__content">
                    <div class="props-boxs__content-subtitle">
                      Beneficiary:
                    </div>
                    <div class="props-boxs__content-props">
                      <span class="props-boxs__content-copy"
                        >БФ ГАРТ БО</span
                      >
                      <button class="props-boxs__content-btn"></button>
                    </div>
                  </div>

                  <div class="props-boxs__content">
                    <div class="props-boxs__content-subtitle">
                      IBAN Code:
                    </div>
                    <div class="props-boxs__content-props">
                      <span class="props-boxs__content-copy"
                        >UA303052990000026006021615619</span
                      >
                      <button class="props-boxs__content-btn"></button>
                    </div>
                  </div>

                  <div class="props-boxs__content">
                    <div class="props-boxs__content-subtitle">
                      Beneficiary bank:
                    </div>
                    <div class="props-boxs__content-props">
                      <span class="props-boxs__content-copy"
                        >JSC CB "PRIVATBANK", 1D HRUSHEVSKOHO STR., KYIV, 01001, UKRAINE</span
                      >
                      <button class="props-boxs__content-btn"></button>
                    </div>
                  </div>

                  <div class="props-boxs__content">
                    <div class="props-boxs__content-subtitle">
                      Swift code:
                    </div>
                    <div class="props-boxs__content-props">
                      <span class="props-boxs__content-copy"
                        >PBANUA2X</span
                      >
                      <button class="props-boxs__content-btn"></button>
                    </div>
                  </div>

                  <div class="props-boxs__content">
                    <div class="props-boxs__content-subtitle">
                      Beneficiary address:
                    </div>
                    <div class="props-boxs__content-props">
                      <span class="props-boxs__content-copy"
                        >UA 18007 Черкаська   м Черкаси вул. Смiлянська б.123/1</span
                      >
                      <button class="props-boxs__content-btn"></button>
                    </div>
                  </div>

                  <div class="props-boxs__text">
                    or
                  </div>

                  <div class="props-boxs__content">
                    <div class="props-boxs__content-subtitle">
                      Correspondent account:
                    </div>
                    <div class="props-boxs__content-props">
                      <span class="props-boxs__content-copy"
                        >400886700401</span
                      >
                      <button class="props-boxs__content-btn"></button>
                    </div>
                  </div>

                  <div class="props-boxs__content">
                    <div class="props-boxs__content-subtitle">
                      Swift code:
                    </div>
                    <div class="props-boxs__content-props">
                      <span class="props-boxs__content-copy"
                        >COBADEFF</span
                      >
                      <button class="props-boxs__content-btn"></button>
                    </div>
                  </div>

                  
                  <div class="props-boxs__content">
                    <div class="props-boxs__content-subtitle">
                      Beneficiary bank:
                    </div>
                    <div class="props-boxs__content-props">
                      <span class="props-boxs__content-copy"
                        >Commerzbank AG, Frankfurt am Main, Germany</span
                      >
                      <button class="props-boxs__content-btn"></button>
                    </div>
                  </div>

                  <div class="props-boxs__text">
                    or
                  </div>

                  <div class="props-boxs__content">
                    <div class="props-boxs__content-subtitle">
                      Correspondent account:
                    </div>
                    <div class="props-boxs__content-props">
                      <span class="props-boxs__content-copy"
                        >6231605145</span
                      >
                      <button class="props-boxs__content-btn"></button>
                    </div>
                  </div>

                  <div class="props-boxs__content">
                    <div class="props-boxs__content-subtitle">
                      Swift code:
                    </div>
                    <div class="props-boxs__content-props">
                      <span class="props-boxs__content-copy"
                        >CHASDEFX</span
                      >
                      <button class="props-boxs__content-btn"></button>
                    </div>
                  </div>

                  <div class="props-boxs__content">
                    <div class="props-boxs__content-subtitle">
                      Beneficiary bank:
                    </div>
                    <div class="props-boxs__content-props">
                      <span class="props-boxs__content-copy"
                        >J.P.MORGAN AG, FRANKFURT AM MAIN, GERMANY</span
                      >
                      <button class="props-boxs__content-btn"></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- <div class="content-payment" id="content-paypal">
          <div class="content-payment__title">
            <?php echo get_field('_details_for_transfer_paypal', 'options'); ?>
          </div>
          <div class="content-payment__text">
            <span class="props-boxs__content-copy">
              maryna.y.dashkevych@gmail.com
            </span>
            <button class="props-boxs__content-btn"></button>
          </div>
        </div> -->

        <div class="content-payment" id="crypto_payment">

          <div class="box-props">
            <div class="box-props__wrapper">
              <div class="box-props__left">
                <div class="props-boxs">

                  <div class="content-payment__title">
                    <?php echo get_field('details_transfer_cryptocurrency_title', 'options'); ?>
                  </div>

                  <div class="props-boxs__title">
                    USDT TRC20
                  </div>

                  <div class="content-payment__text">
                    <span class="props-boxs__content-copy">
                      TRi7FFPYoJ38R9pDdMvCxyE1Vjmc9xttXm
                    </span>
                    <button class="props-boxs__content-btn"></button>
                  </div>


                  <div class="props-boxs__title">
                    BTC:
                  </div>

                  <div class="content-payment__text">
                    <span class="props-boxs__content-copy">
                      bc1qs0j6gxtdz7gl08ueeydtuu7crde5wlxwnyey0j
                    </span>
                    <button class="props-boxs__content-btn"></button>
                  </div>


                  <div class="props-boxs__title">
                    ETH:
                  </div>

                  <div class="content-payment__text">
                    <span class="props-boxs__content-copy">
                      0x3bBE5F353170Dd14D00300eD4B1b913a93D65bdE
                    </span>
                    <button class="props-boxs__content-btn"></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<script>
  const lickPayLanguage = '<?php echo $lickPayLanguage; ?>';
  const copyContentProps = (selectBtnsCopu) => {
    const btnsCopy = document.querySelectorAll(selectBtnsCopu);

    btnsCopy.forEach((btnItem) => {
      btnItem.addEventListener("click", () => {
        let textContent =
          btnItem.previousSibling.previousElementSibling.textContent;

        if (textContent) {
          navigator.clipboard.writeText(textContent);
        }
      });
    });
  };
  copyContentProps(".props-boxs__content-btn");

  window.LiqPayCheckoutCallback = function () {
    LiqPayCheckout.init({
        data: "<?=$data?>",
        signature: "<?=$signature?>",
        embedTo: "#liqpay_checkout",
        language: lickPayLanguage,
        mode: "embed" // embed || popup
    }).on("liqpay.callback", function (data) {
        console.log(data.status);
        console.log(data);
    }).on("liqpay.ready", function (data) {
        // ready
    }).on("liqpay.close", function (data) {
        // close
    });
  };
</script>
<script src="//static.liqpay.ua/libjs/checkout.js" async></script>
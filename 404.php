<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package gard
 */

get_header();
?>

	<section class="error">
      <div class="container">
        <div class="error__inner">
          <div class="error__text">
            <svg
              class="error__text-img"
              width="303"
              height="130"
              viewBox="0 0 303 130"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M2 97.7059C0.895433 97.7059 0 96.8105 0 95.7059V81.3142C0 80.928 0.111803 80.5501 0.321907 80.2261L42.9096 14.5475C43.2783 13.9788 43.91 13.6356 44.5877 13.6356H56.4591C57.5637 13.6356 58.4591 14.5311 58.4591 15.6356V35.1434C58.4591 36.248 57.5637 37.1434 56.4591 37.1434H50.6958C50.0166 37.1434 49.3838 37.4881 49.0154 38.0588L22.2813 79.4744C22.2171 79.5739 22.1829 79.6898 22.1829 79.8082C22.1829 80.1481 22.4585 80.4237 22.7984 80.4237H82C83.1046 80.4237 84 81.3191 84 82.4237V95.7059C84 96.8105 83.1046 97.7059 82 97.7059H2ZM52.0133 115.636C50.9088 115.636 50.0133 114.74 50.0133 113.636V92.5262L50.4203 85.0057V15.6356C50.4203 14.5311 51.3158 13.6356 52.4203 13.6356H69.0769C70.1815 13.6356 71.0769 14.5311 71.0769 15.6356V113.636C71.0769 114.74 70.1815 115.636 69.0769 115.636H52.0133Z"
                fill="#0057B8"
              />
              <g filter="url(#filter0_b_190_1693)">
                <path
                  d="M198 64.6356C198 57.9382 196.681 51.3064 194.118 45.1188C191.555 38.9312 187.798 33.309 183.062 28.5732C178.327 23.8374 172.704 20.0808 166.517 17.5178C160.329 14.9548 153.697 13.6356 147 13.6356C140.303 13.6356 133.671 14.9548 127.483 17.5178C121.296 20.0808 115.673 23.8374 110.938 28.5732C106.202 33.309 102.445 38.9312 99.8821 45.1188C97.3192 51.3064 96 57.9382 96 64.6356L147 64.6356H198Z"
                  fill="#0057B8"
                />
                <path
                  d="M198 64.6356C198 71.333 196.681 77.9649 194.118 84.1525C191.555 90.3401 187.798 95.9623 183.062 100.698C178.327 105.434 172.704 109.19 166.517 111.753C160.329 114.316 153.697 115.636 147 115.636C140.303 115.636 133.671 114.316 127.483 111.753C121.296 109.19 115.673 105.434 110.938 100.698C106.202 95.9623 102.445 90.3401 99.8821 84.1525C97.3192 77.9649 96 71.333 96 64.6356L147 64.6356H198Z"
                  fill="#FFD700"
                />
              </g>
              <path
                d="M212 98.0302C210.895 98.0302 210 97.1347 210 96.0302V81.4671C210 81.0839 210.11 80.7089 210.317 80.3864L252.911 14.055C253.278 13.482 253.913 13.1356 254.593 13.1356H266.459C267.564 13.1356 268.459 14.0311 268.459 15.1356V34.8739C268.459 35.9785 267.564 36.8739 266.459 36.8739H260.702C260.019 36.8739 259.384 37.2218 259.016 37.7967L232.281 79.6204C232.217 79.7206 232.183 79.837 232.183 79.9558C232.183 80.2997 232.462 80.5785 232.806 80.5785H292C293.105 80.5785 294 81.4739 294 82.5785V96.0302C294 97.1347 293.105 98.0302 292 98.0302H212ZM262.013 116.136C260.909 116.136 260.013 115.24 260.013 114.136V92.7997L260.42 85.2055V15.1356C260.42 14.031 261.316 13.1356 262.42 13.1356H279.077C280.181 13.1356 281.077 14.0311 281.077 15.1356V114.136C281.077 115.24 280.181 116.136 279.077 116.136H262.013Z"
                fill="#FFD700"
              />
              <defs>
                <filter
                  id="filter0_b_190_1693"
                  x="48"
                  y="-34.3644"
                  width="198"
                  height="198"
                  filterUnits="userSpaceOnUse"
                  color-interpolation-filters="sRGB"
                >
                  <feFlood flood-opacity="0" result="BackgroundImageFix" />
                  <feGaussianBlur in="BackgroundImage" stdDeviation="24" />
                  <feComposite
                    in2="SourceAlpha"
                    operator="in"
                    result="effect1_backgroundBlur_190_1693"
                  />
                  <feBlend
                    mode="normal"
                    in="SourceGraphic"
                    in2="effect1_backgroundBlur_190_1693"
                    result="shape"
                  />
                </filter>
              </defs>
            </svg>
            <h3 class="error__text-subtitle">Page Not Found</h3>
            <p class="error__text-desc">
              Sorry, the page you’re looking for can’t be found
            </p>
            <div id="back_page" class="btn"><span><?php echo get_field('_back_button', 'options'); ?></span></div>
          </div>
          <div class="error__picture">
            <svg
              class="error__picture-item"
              width="610"
              height="508"
              viewBox="0 0 610 508"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M580.882 330H535.905C514.578 330 497.289 347.352 497.289 368.757H542.266C563.593 368.757 580.882 351.405 580.882 330Z"
                fill="url(#paint0_linear_447_3854)"
              />
              <path
                d="M539.085 377.876H494.109C472.781 377.876 455.492 395.228 455.492 416.633H500.469C521.796 416.633 539.085 399.281 539.085 377.876Z"
                fill="url(#paint1_linear_447_3854)"
              />
              <path
                d="M497.288 424.992H452.312C430.984 424.992 413.695 442.344 413.695 463.749H458.672C479.999 463.749 497.288 446.397 497.288 424.992Z"
                fill="url(#paint2_linear_447_3854)"
              />
              <path
                d="M609.788 378.362L566.438 366.373C545.882 360.689 524.594 372.805 518.888 393.435L562.238 405.423C582.794 411.108 604.082 398.992 609.788 378.362Z"
                fill="url(#paint3_linear_447_3854)"
              />
              <path
                d="M556.741 413.365L513.391 401.377C492.836 395.692 471.547 407.808 465.842 428.439L509.191 440.427C529.747 446.111 551.036 433.995 556.741 413.365Z"
                fill="url(#paint4_linear_447_3854)"
              />
              <path
                d="M503.897 447.636L460.547 435.648C439.992 429.963 418.703 442.079 412.998 462.71L456.347 474.698C476.903 480.383 498.192 468.267 503.897 447.636Z"
                fill="url(#paint5_linear_447_3854)"
              />
              <g filter="url(#filter0_f_447_3854)">
                <ellipse
                  cx="242.451"
                  cy="412.754"
                  rx="210.162"
                  ry="40.5229"
                  fill="#1F88F8"
                  fill-opacity="0.35"
                />
              </g>
              <path
                d="M250.231 462.253C370.597 462.253 468.173 364.726 468.173 244.421C468.173 124.115 370.597 26.5879 250.231 26.5879C129.865 26.5879 32.2891 124.115 32.2891 244.421C32.2891 364.726 129.865 462.253 250.231 462.253Z"
                fill="url(#paint6_linear_447_3854)"
              />
              <path
                d="M418.831 114.643H142.008V251.184H418.831V114.643Z"
                fill="url(#paint7_linear_447_3854)"
              />
              <path
                d="M418.836 114.643H446.621C464.735 114.643 482.106 121.835 494.914 134.636C507.722 147.438 514.918 164.801 514.918 182.905C514.918 201.01 507.722 218.372 494.914 231.174C482.106 243.976 464.735 251.168 446.621 251.168H418.836V114.643Z"
                fill="url(#paint8_linear_447_3854)"
              />
              <path
                d="M436.812 134.728H452.708C464.933 134.728 476.657 139.582 485.301 148.222C493.946 156.862 498.802 168.58 498.802 180.799V185.028C498.802 197.247 493.946 208.966 485.301 217.606C476.657 226.246 464.933 231.1 452.708 231.1H436.812V134.728Z"
                fill="url(#paint9_linear_447_3854)"
              />
              <path
                d="M418.833 137.558H165.258V251.184H418.833V137.558Z"
                fill="url(#paint10_linear_447_3854)"
              />
              <rect
                x="75.875"
                y="273.915"
                width="102.809"
                height="131.601"
                fill="url(#paint11_linear_447_3854)"
              />
              <rect
                x="202.125"
                y="273.915"
                width="102.809"
                height="131.601"
                fill="url(#paint12_linear_447_3854)"
              />
              <rect
                x="328.391"
                y="273.915"
                width="66.7347"
                height="131.601"
                fill="url(#paint13_linear_447_3854)"
              />
              <path
                d="M418.837 114.643H395.203V251.184H418.837V114.643Z"
                fill="url(#paint14_linear_447_3854)"
              />
              <path
                d="M202.135 250.479L178.688 250.479L178.687 428.952L202.135 428.952L202.135 250.479Z"
                fill="url(#paint15_linear_447_3854)"
              />
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M315.759 273.915V250.479H76.8775L57.176 250.479C54.5547 250.479 52.4297 252.604 52.4297 255.225L52.4297 424.206C52.4297 426.827 54.5547 428.952 57.1759 428.952H76.8775V428.952H315.759V405.516H76.8819L76.882 273.915H315.759Z"
                fill="url(#paint16_linear_447_3854)"
              />
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M328.372 250.479H395.107L418.555 250.479L418.555 424.206C418.555 426.827 416.43 428.952 413.808 428.952H395.107L395.107 428.952H328.372V428.952H304.93L304.93 255.225C304.93 252.604 307.055 250.479 309.676 250.479L328.372 250.479ZM395.107 405.516V273.915H328.377L328.377 405.516H395.107Z"
                fill="url(#paint17_linear_447_3854)"
              />
              <path
                d="M160.562 251.474V251.731V259.852V319.013H226.011C226.535 319.013 226.96 318.588 226.96 318.063V259.852V252.423C226.96 251.899 226.535 251.474 226.011 251.474H160.562Z"
                fill="url(#paint18_linear_447_3854)"
              />
              <path
                d="M155.793 251.474C155.269 251.474 154.844 251.899 154.844 252.423V318.063C154.844 318.588 155.269 319.013 155.793 319.013H221.241V251.474H155.793Z"
                fill="url(#paint19_linear_447_3854)"
              />
              <path
                d="M211.889 257.938H164.234C163.186 257.938 162.336 258.788 162.336 259.837V310.103C162.336 311.152 163.186 312.002 164.234 312.002H211.889C212.937 312.002 213.787 311.152 213.787 310.103V259.837C213.787 258.788 212.937 257.938 211.889 257.938Z"
                fill="url(#paint20_linear_447_3854)"
              />
              <g filter="url(#filter1_d_447_3854)">
                <path
                  d="M37.9922 205.766L62.9619 267.146C63.303 267.988 63.8068 268.754 64.4446 269.4C65.0824 270.046 65.8416 270.561 66.6786 270.913C67.5156 271.266 68.414 271.45 69.3223 271.455C70.2306 271.459 71.1309 271.285 71.9716 270.941L127.928 248.219C129.63 247.527 130.987 246.188 131.702 244.497C132.417 242.806 132.431 240.9 131.741 239.198L102.878 168.25C102.186 166.553 100.848 165.201 99.1589 164.489C97.4696 163.778 95.5668 163.765 93.8684 164.455L47.3719 183.35L37.9922 205.766Z"
                  fill="url(#paint21_linear_447_3854)"
                />
              </g>
              <g filter="url(#filter2_d_447_3854)">
                <path
                  d="M433.461 169.711L408.491 231.091C408.15 231.932 407.646 232.698 407.009 233.345C406.371 233.991 405.612 234.505 404.775 234.858C403.938 235.21 403.039 235.394 402.131 235.399C401.223 235.404 400.322 235.23 399.481 234.886L343.525 212.164C341.823 211.472 340.466 210.133 339.751 208.442C339.036 206.75 339.022 204.845 339.712 203.143L368.575 132.195C369.267 130.498 370.605 129.145 372.294 128.434C373.984 127.722 375.886 127.71 377.585 128.4L424.081 147.294L433.461 169.711Z"
                  fill="url(#paint22_linear_447_3854)"
                />
              </g>
              <path
                d="M37.9922 205.766L53.8716 199.318L47.3879 183.35L37.9922 205.766Z"
                fill="url(#paint23_linear_447_3854)"
              />
              <path
                d="M433.461 169.711L417.581 163.263L424.065 147.294L433.461 169.711Z"
                fill="url(#paint24_linear_447_3854)"
              />
              <path
                d="M194.833 287.237C196.88 285.798 198.416 283.745 199.217 281.375C200.018 279.005 200.043 276.442 199.288 274.057C198.533 271.672 197.038 269.59 195.019 268.111C193 266.633 190.562 265.836 188.06 265.836C185.557 265.836 183.119 266.633 181.1 268.111C179.081 269.59 177.586 271.672 176.831 274.057C176.076 276.442 176.101 279.005 176.902 281.375C177.703 283.745 179.239 285.798 181.286 287.237L176.234 304.62H199.869L194.833 287.237Z"
                fill="url(#paint25_linear_447_3854)"
              />
              <path
                d="M340.402 104.818C340.402 107.347 340.023 109.862 339.276 112.279C338.067 116.154 335.93 119.676 333.05 122.539C332.204 123.394 331.296 124.184 330.331 124.903C329.697 125.397 329.03 125.848 328.336 126.253C327.644 126.677 326.93 127.064 326.196 127.411C325.102 127.951 323.967 128.402 322.801 128.762C320.383 129.508 317.867 129.887 315.336 129.888H310.67V250.734H180.352V102.197C180.373 96.2536 182.744 90.5601 186.949 86.3577C191.153 82.1554 196.849 79.7852 202.795 79.764H315.272C318.405 79.7519 321.512 80.3359 324.426 81.4846C325.235 81.7979 326.024 82.1577 326.791 82.562C327.178 82.755 327.548 82.964 327.918 83.1892C328.222 83.3561 328.517 83.5386 328.802 83.7359C330.323 84.6968 331.731 85.8241 333.002 87.0968C334.707 88.8053 336.159 90.7494 337.313 92.8698C338.093 94.2987 338.729 95.8016 339.212 97.3563L339.55 98.5623C339.758 99.368 339.924 100.184 340.049 101.007C340.265 102.266 340.383 103.54 340.402 104.818Z"
                fill="url(#paint26_linear_447_3854)"
              />
              <path
                d="M340.404 104.817C340.403 107.347 340.024 109.862 339.277 112.279C338.784 113.83 338.148 115.331 337.379 116.765C336.214 118.883 334.757 120.826 333.051 122.538C332.206 123.394 331.297 124.184 330.332 124.902C329.689 125.385 329.029 125.819 328.337 126.253C327.645 126.677 326.931 127.064 326.197 127.411C325.1 127.944 323.966 128.395 322.803 128.762C320.385 129.508 317.868 129.887 315.338 129.887H310.672V102.196C310.682 97.7681 311.999 93.4413 314.457 89.7572C316.915 86.0732 320.406 83.1955 324.492 81.4844C325.296 81.806 326.101 82.1598 326.857 82.5618C327.243 82.7548 327.613 82.9638 327.983 83.1889C328.287 83.3558 328.583 83.5383 328.868 83.7357C330.388 84.6966 331.797 85.8238 333.067 87.0965C334.773 88.8051 336.225 90.7492 337.379 92.8695C338.152 94.3016 338.788 95.8039 339.277 97.356L339.615 98.5621C339.825 99.3674 339.991 100.183 340.114 101.006C340.309 102.267 340.406 103.542 340.404 104.817Z"
                fill="url(#paint27_linear_447_3854)"
              />
              <path
                d="M284.655 206.737H202.361C200.984 206.737 199.867 207.849 199.867 209.222C199.867 210.594 200.984 211.707 202.361 211.707H284.655C286.032 211.707 287.149 210.594 287.149 209.222C287.149 207.849 286.032 206.737 284.655 206.737Z"
                fill="#FFD700"
              />
              <path
                d="M284.655 181.249H202.361C200.984 181.249 199.867 182.362 199.867 183.734C199.867 185.106 200.984 186.219 202.361 186.219H284.655C286.032 186.219 287.149 185.106 287.149 183.734C287.149 182.362 286.032 181.249 284.655 181.249Z"
                fill="#FFD700"
              />
              <path
                d="M284.654 155.745H231.658C230.281 155.745 229.164 156.857 229.164 158.23C229.164 159.602 230.281 160.715 231.658 160.715H284.654C286.031 160.715 287.147 159.602 287.147 158.23C287.147 156.857 286.031 155.745 284.654 155.745Z"
                fill="#FFD700"
              />
              <path
                d="M249.887 130.241H201.782C200.724 130.241 199.867 131.098 199.867 132.155V133.297C199.867 134.354 200.724 135.211 201.782 135.211H249.887C250.944 135.211 251.801 134.354 251.801 133.297V132.155C251.801 131.098 250.944 130.241 249.887 130.241Z"
                fill="#FFD700"
              />
              <path
                d="M220.058 155.745H202.361C200.984 155.745 199.867 156.857 199.867 158.23C199.867 159.602 200.984 160.715 202.361 160.715H220.058C221.436 160.715 222.552 159.602 222.552 158.23C222.552 156.857 221.436 155.745 220.058 155.745Z"
                fill="#FFD700"
              />
              <path
                d="M76.7734 273.915H84.8898V405.516H76.7734V273.915Z"
                fill="url(#paint28_linear_447_3854)"
              />
              <path
                d="M202.125 318.983H209.34V405.516H202.125V318.983Z"
                fill="url(#paint29_linear_447_3854)"
              />
              <path
                d="M328.391 273.915H336.507V405.516H328.391V273.915Z"
                fill="url(#paint30_linear_447_3854)"
              />
              <g filter="url(#filter3_f_447_3854)">
                <ellipse
                  cx="107.495"
                  cy="162.865"
                  rx="69.5025"
                  ry="22.3289"
                  fill="#FF4C77"
                  fill-opacity="0.3"
                />
              </g>
              <path
                d="M42.325 130.327C43.6654 140.329 47.5187 149.829 53.5255 157.94C59.5322 166.052 67.4966 172.51 76.6757 176.714C85.8549 180.917 95.9496 182.728 106.018 181.978C116.087 181.228 125.802 177.941 134.256 172.424L157.289 180.25C157.984 180.479 158.73 180.504 159.439 180.323C160.147 180.141 160.789 179.761 161.289 179.226C161.788 178.692 162.123 178.025 162.256 177.306C162.388 176.587 162.311 175.845 162.035 175.168L152.798 153.145C157.711 144.965 160.591 135.728 161.199 126.207C161.807 116.685 160.124 107.157 156.291 98.4189C152.458 89.681 146.587 81.988 139.169 75.9837C131.751 69.9793 123.001 65.8384 113.653 63.9076C104.305 61.9767 94.6306 62.312 85.4389 64.8855C76.2472 67.4589 67.8059 72.1957 60.8217 78.6992C53.8375 85.2027 48.5135 93.2838 45.2955 102.266C42.0774 111.248 41.0588 120.87 42.325 130.327Z"
                fill="#FA5252"
              />
              <path
                d="M99.9891 152.966C106.479 152.966 111.101 148.523 111.101 142.304C111.101 136.084 106.479 131.641 99.9891 131.641C93.5886 131.641 88.8771 136.084 88.8771 142.304C88.8771 148.523 93.5886 152.966 99.9891 152.966ZM108.879 129.864C108.879 124 112.257 121.868 116.879 119.735C123.013 116.892 127.547 111.116 127.547 104.008C127.547 92.8128 116.524 84.9938 101.589 84.9938C85.588 84.9938 74.2982 93.9679 73.3203 106.496L93.7664 110.228C94.2998 105.341 96.8778 101.876 100.523 101.876C103.278 101.876 105.323 103.742 105.323 106.318C105.323 109.339 102.3 111.205 99.9002 112.627C93.4997 116.803 91.0995 121.423 91.0995 129.864H108.879Z"
                fill="white"
              />
              <path
                d="M380.277 60.9556C380.277 66.2445 375.987 70.5336 370.693 70.5336C365.399 70.5336 361.109 66.2445 361.109 60.9556C361.109 55.6668 365.399 51.3777 370.693 51.3777C375.987 51.3777 380.277 55.6668 380.277 60.9556Z"
                stroke="url(#paint31_linear_447_3854)"
                stroke-width="4"
              />
              <path
                d="M346.081 465.471C346.081 470.76 341.792 475.049 336.498 475.049C331.204 475.049 326.914 470.76 326.914 465.471C326.914 460.183 331.204 455.893 336.498 455.893C341.792 455.893 346.081 460.183 346.081 465.471Z"
                stroke="url(#paint32_linear_447_3854)"
                stroke-width="4"
              />
              <path
                d="M30.9912 332.712C33.2722 332.347 35.0934 334.587 34.2692 336.744L27.7521 353.801C26.928 355.958 24.077 356.414 22.6202 354.622L11.0998 340.452C9.64299 338.661 10.6729 335.965 12.9537 335.599L30.9912 332.712Z"
                fill="url(#paint33_linear_447_3854)"
              />
              <path
                d="M479.405 327.015C481.686 326.65 483.507 328.89 482.683 331.047L476.166 348.103C475.342 350.26 472.491 350.716 471.034 348.925L459.514 334.755C458.057 332.963 459.087 330.267 461.368 329.902L479.405 327.015Z"
                fill="url(#paint34_linear_447_3854)"
              />
              <path
                d="M229.632 16.0994C230.618 12.0181 236.423 12.0181 237.408 16.0994L240.669 29.6008C241.021 31.0594 242.16 32.1982 243.619 32.5502L257.119 35.8075C261.202 36.7924 261.202 42.5993 257.119 43.5843L243.619 46.8416C242.16 47.1935 241.021 48.3323 240.669 49.791L237.408 63.2924C236.423 67.3736 230.618 67.3736 229.632 63.2924L226.371 49.791C226.019 48.3323 224.88 47.1935 223.421 46.8416L209.921 43.5843C205.838 42.5993 205.838 36.7924 209.921 35.8075L223.421 32.5502C224.88 32.1982 226.019 31.0594 226.371 29.6008L229.632 16.0994Z"
                fill="url(#paint35_linear_447_3854)"
              />
              <path
                d="M128.929 437.708C129.914 433.626 135.719 433.626 136.705 437.708L139.966 451.209C140.318 452.668 141.457 453.806 142.916 454.158L156.416 457.416C160.499 458.401 160.499 464.208 156.416 465.193L142.916 468.45C141.457 468.802 140.318 469.941 139.966 471.399L136.705 484.901C135.719 488.982 129.914 488.982 128.929 484.901L125.668 471.399C125.316 469.941 124.177 468.802 122.718 468.45L109.218 465.193C105.135 464.208 105.135 458.401 109.218 457.416L122.718 454.158C124.177 453.806 125.316 452.668 125.668 451.209L128.929 437.708Z"
                fill="url(#paint36_linear_447_3854)"
              />
              <defs>
                <filter
                  id="filter0_f_447_3854"
                  x="10.5161"
                  y="350.458"
                  width="463.874"
                  height="124.592"
                  filterUnits="userSpaceOnUse"
                  color-interpolation-filters="sRGB"
                >
                  <feFlood flood-opacity="0" result="BackgroundImageFix" />
                  <feBlend
                    mode="normal"
                    in="SourceGraphic"
                    in2="BackgroundImageFix"
                    result="shape"
                  />
                  <feGaussianBlur
                    stdDeviation="10.8865"
                    result="effect1_foregroundBlur_447_3854"
                  />
                </filter>
                <filter
                  id="filter1_d_447_3854"
                  x="35.1444"
                  y="163.947"
                  width="113.243"
                  height="127.442"
                  filterUnits="userSpaceOnUse"
                  color-interpolation-filters="sRGB"
                >
                  <feFlood flood-opacity="0" result="BackgroundImageFix" />
                  <feColorMatrix
                    in="SourceAlpha"
                    type="matrix"
                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                    result="hardAlpha"
                  />
                  <feOffset dx="6.64476" dy="10.4418" />
                  <feGaussianBlur stdDeviation="4.74626" />
                  <feComposite in2="hardAlpha" operator="out" />
                  <feColorMatrix
                    type="matrix"
                    values="0 0 0 0 0.184314 0 0 0 0 0.254902 0 0 0 0 0.443137 0 0 0 0.15 0"
                  />
                  <feBlend
                    mode="normal"
                    in2="BackgroundImageFix"
                    result="effect1_dropShadow_447_3854"
                  />
                  <feBlend
                    mode="normal"
                    in="SourceGraphic"
                    in2="effect1_dropShadow_447_3854"
                    result="shape"
                  />
                </filter>
                <filter
                  id="filter2_d_447_3854"
                  x="336.355"
                  y="127.891"
                  width="113.243"
                  height="127.442"
                  filterUnits="userSpaceOnUse"
                  color-interpolation-filters="sRGB"
                >
                  <feFlood flood-opacity="0" result="BackgroundImageFix" />
                  <feColorMatrix
                    in="SourceAlpha"
                    type="matrix"
                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                    result="hardAlpha"
                  />
                  <feOffset dx="6.64476" dy="10.4418" />
                  <feGaussianBlur stdDeviation="4.74626" />
                  <feComposite in2="hardAlpha" operator="out" />
                  <feColorMatrix
                    type="matrix"
                    values="0 0 0 0 0.184314 0 0 0 0 0.254902 0 0 0 0 0.443137 0 0 0 0.15 0"
                  />
                  <feBlend
                    mode="normal"
                    in2="BackgroundImageFix"
                    result="effect1_dropShadow_447_3854"
                  />
                  <feBlend
                    mode="normal"
                    in="SourceGraphic"
                    in2="effect1_dropShadow_447_3854"
                    result="shape"
                  />
                </filter>
                <filter
                  id="filter3_f_447_3854"
                  x="16.2192"
                  y="118.763"
                  width="182.554"
                  height="88.2038"
                  filterUnits="userSpaceOnUse"
                  color-interpolation-filters="sRGB"
                >
                  <feFlood flood-opacity="0" result="BackgroundImageFix" />
                  <feBlend
                    mode="normal"
                    in="SourceGraphic"
                    in2="BackgroundImageFix"
                    result="shape"
                  />
                  <feGaussianBlur
                    stdDeviation="10.8865"
                    result="effect1_foregroundBlur_447_3854"
                  />
                </filter>
                <linearGradient
                  id="paint0_linear_447_3854"
                  x1="495.199"
                  y1="332.643"
                  x2="540.589"
                  y2="395.224"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#4C94FE" />
                  <stop offset="1" stop-color="#BED8FF" />
                </linearGradient>
                <linearGradient
                  id="paint1_linear_447_3854"
                  x1="453.402"
                  y1="380.518"
                  x2="498.792"
                  y2="443.1"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#4C94FE" />
                  <stop offset="1" stop-color="#BED8FF" />
                </linearGradient>
                <linearGradient
                  id="paint2_linear_447_3854"
                  x1="411.605"
                  y1="427.635"
                  x2="456.995"
                  y2="490.216"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#4C94FE" />
                  <stop offset="1" stop-color="#BED8FF" />
                </linearGradient>
                <linearGradient
                  id="paint3_linear_447_3854"
                  x1="605.4"
                  y1="377.834"
                  x2="542.735"
                  y2="429.319"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#FFD700" />
                  <stop offset="1" stop-color="#FFF3B3" />
                </linearGradient>
                <linearGradient
                  id="paint4_linear_447_3854"
                  x1="552.353"
                  y1="412.837"
                  x2="489.688"
                  y2="464.322"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#FFD700" />
                  <stop offset="1" stop-color="#FFF3B3" />
                </linearGradient>
                <linearGradient
                  id="paint5_linear_447_3854"
                  x1="499.509"
                  y1="447.108"
                  x2="436.844"
                  y2="498.593"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#FFD700" />
                  <stop offset="1" stop-color="#FFF3B3" />
                </linearGradient>
                <linearGradient
                  id="paint6_linear_447_3854"
                  x1="248.551"
                  y1="-44.3438"
                  x2="253.011"
                  y2="720.652"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#CAE0FF" stop-opacity="0" />
                  <stop offset="1" stop-color="#0057B8" />
                </linearGradient>
                <linearGradient
                  id="paint7_linear_447_3854"
                  x1="280.419"
                  y1="114.643"
                  x2="280.419"
                  y2="251.184"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#FFF4B6" />
                  <stop offset="1" stop-color="#FEE76B" />
                </linearGradient>
                <linearGradient
                  id="paint8_linear_447_3854"
                  x1="466.877"
                  y1="114.643"
                  x2="466.877"
                  y2="251.168"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#FFE86D" />
                  <stop offset="1" stop-color="#E7C825" />
                </linearGradient>
                <linearGradient
                  id="paint9_linear_447_3854"
                  x1="507.854"
                  y1="234.254"
                  x2="446.569"
                  y2="153.101"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#FFFADC" />
                  <stop offset="1" stop-color="#FFF2AC" />
                </linearGradient>
                <linearGradient
                  id="paint10_linear_447_3854"
                  x1="292.045"
                  y1="137.558"
                  x2="292.045"
                  y2="251.184"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#DDC12D" />
                  <stop offset="1" stop-color="#E9D35F" />
                </linearGradient>
                <linearGradient
                  id="paint11_linear_447_3854"
                  x1="206.64"
                  y1="454.19"
                  x2="80.4436"
                  y2="335.146"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#FFFCED" />
                  <stop offset="1" stop-color="#FFEF99" />
                </linearGradient>
                <linearGradient
                  id="paint12_linear_447_3854"
                  x1="310.345"
                  y1="417.234"
                  x2="184.107"
                  y2="364.909"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#FFFADE" />
                  <stop offset="1" stop-color="#FFF2AA" />
                </linearGradient>
                <linearGradient
                  id="paint13_linear_447_3854"
                  x1="422.18"
                  y1="419.938"
                  x2="304.998"
                  y2="309.011"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#FFFBE4" />
                  <stop offset="1" stop-color="#FFF1A5" />
                </linearGradient>
                <linearGradient
                  id="paint14_linear_447_3854"
                  x1="407.02"
                  y1="114.643"
                  x2="407.02"
                  y2="251.184"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#FFF0A2" />
                  <stop offset="1" stop-color="#FFE563" />
                </linearGradient>
                <linearGradient
                  id="paint15_linear_447_3854"
                  x1="149.829"
                  y1="305.463"
                  x2="133.612"
                  y2="463.206"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#FFF09F" />
                  <stop offset="1" stop-color="#C6A700" />
                </linearGradient>
                <linearGradient
                  id="paint16_linear_447_3854"
                  x1="47.9206"
                  y1="282.027"
                  x2="305.796"
                  y2="401.104"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#FFF3B4" />
                  <stop offset="1" stop-color="#E1C114" />
                </linearGradient>
                <linearGradient
                  id="paint17_linear_447_3854"
                  x1="507.831"
                  y1="361.349"
                  x2="346.412"
                  y2="366.762"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#B99C00" />
                  <stop offset="1" stop-color="#FFE559" />
                </linearGradient>
                <linearGradient
                  id="paint18_linear_447_3854"
                  x1="193.761"
                  y1="251.474"
                  x2="193.761"
                  y2="319.013"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#FFEB7D" />
                  <stop offset="1" stop-color="#FFE34F" />
                </linearGradient>
                <linearGradient
                  id="paint19_linear_447_3854"
                  x1="188.043"
                  y1="251.474"
                  x2="188.043"
                  y2="319.013"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#FFF2AD" />
                  <stop offset="1" stop-color="#FFE970" />
                </linearGradient>
                <linearGradient
                  id="paint20_linear_447_3854"
                  x1="188.062"
                  y1="257.938"
                  x2="188.062"
                  y2="312.002"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#FFD700" />
                  <stop offset="1" stop-color="#FFF2AE" />
                </linearGradient>
                <linearGradient
                  id="paint21_linear_447_3854"
                  x1="122.019"
                  y1="211.793"
                  x2="58.5568"
                  y2="205.453"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#FFF5C1" />
                  <stop offset="1" stop-color="#FFFDEF" />
                </linearGradient>
                <linearGradient
                  id="paint22_linear_447_3854"
                  x1="349.434"
                  y1="175.737"
                  x2="412.896"
                  y2="169.398"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#FFEC87" />
                  <stop offset="1" stop-color="white" />
                </linearGradient>
                <linearGradient
                  id="paint23_linear_447_3854"
                  x1="45.9319"
                  y1="183.35"
                  x2="45.9319"
                  y2="205.766"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#EDF4FF" />
                  <stop offset="1" stop-color="#FFF2AE" />
                </linearGradient>
                <linearGradient
                  id="paint24_linear_447_3854"
                  x1="425.521"
                  y1="147.294"
                  x2="425.521"
                  y2="169.711"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#FFFCED" />
                  <stop offset="1" stop-color="#FFF1A7" />
                </linearGradient>
                <linearGradient
                  id="paint25_linear_447_3854"
                  x1="182.29"
                  y1="293.745"
                  x2="205.737"
                  y2="294.647"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#C8AD23" />
                  <stop offset="1" stop-color="#D1BB4C" />
                </linearGradient>
                <linearGradient
                  id="paint26_linear_447_3854"
                  x1="260.377"
                  y1="79.7638"
                  x2="260.377"
                  y2="250.734"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#FFF9DB" />
                  <stop offset="1" stop-color="#FFE450" />
                </linearGradient>
                <linearGradient
                  id="paint27_linear_447_3854"
                  x1="329.288"
                  y1="123.384"
                  x2="294.13"
                  y2="96.3264"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#FFEA78" />
                  <stop offset="1" stop-color="#FFD700" />
                </linearGradient>
                <linearGradient
                  id="paint28_linear_447_3854"
                  x1="19.9587"
                  y1="399.206"
                  x2="190.688"
                  y2="380.017"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop offset="0.09375" stop-color="#E9C401" />
                  <stop offset="1" stop-color="#D7BC2F" stop-opacity="0" />
                </linearGradient>
                <linearGradient
                  id="paint29_linear_447_3854"
                  x1="151.623"
                  y1="401.367"
                  x2="301.831"
                  y2="378.544"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop offset="0.09375" stop-color="#C1A821" />
                  <stop offset="1" stop-color="#BDA838" stop-opacity="0" />
                </linearGradient>
                <linearGradient
                  id="paint30_linear_447_3854"
                  x1="271.576"
                  y1="399.206"
                  x2="411.498"
                  y2="411.491"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop offset="0.09375" stop-color="#B69E1F" />
                  <stop offset="1" stop-color="#FFEC87" />
                </linearGradient>
                <linearGradient
                  id="paint31_linear_447_3854"
                  x1="356.455"
                  y1="53.7194"
                  x2="392.638"
                  y2="85.094"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#94BFFF" />
                  <stop offset="1" stop-color="#4C94FE" />
                </linearGradient>
                <linearGradient
                  id="paint32_linear_447_3854"
                  x1="322.259"
                  y1="458.235"
                  x2="358.443"
                  y2="489.61"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#94BFFF" />
                  <stop offset="1" stop-color="#4C94FE" />
                </linearGradient>
                <linearGradient
                  id="paint33_linear_447_3854"
                  x1="36.1236"
                  y1="331.891"
                  x2="10.449"
                  y2="352.765"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#70A8FF" />
                  <stop offset="1" stop-color="#0057B8" />
                </linearGradient>
                <linearGradient
                  id="paint34_linear_447_3854"
                  x1="484.538"
                  y1="326.193"
                  x2="458.863"
                  y2="347.068"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#70A8FF" />
                  <stop offset="1" stop-color="#0057B8" />
                </linearGradient>
                <linearGradient
                  id="paint35_linear_447_3854"
                  x1="233.52"
                  y1="0"
                  x2="233.52"
                  y2="79.3917"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#70A8FF" />
                  <stop offset="1" stop-color="#5597FD" />
                </linearGradient>
                <linearGradient
                  id="paint36_linear_447_3854"
                  x1="132.817"
                  y1="421.608"
                  x2="132.817"
                  y2="501"
                  gradientUnits="userSpaceOnUse"
                >
                  <stop stop-color="#70A8FF" />
                  <stop offset="1" stop-color="#5597FD" />
                </linearGradient>
              </defs>
            </svg>
          </div>
        </div>
      </div>
    </section>

<script>
  let GoBack = function (){
    window.history.back();
  };
  document.querySelector("#back_page").addEventListener("click", ()=> {
    window.history.back();
  })
</script>

<?php
get_footer();

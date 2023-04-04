import dropMobailMenu from './modules/dropMobailMenu.js';
import toogleClassName from './modules/toogleClassName.js';
import {
    tabsReport,
    tabsPayments
} from './modules/tabsReport.js';
import Modal from './modules/Modals.js';
import copyContentProps from './modules/copyContentProps.js';

window.addEventListener('DOMContentLoaded', () => {
    dropMobailMenu('.mobail-menu', '.mobail-content');
    tabsReport();
    tabsPayments();

    toogleClassName('.question-box__item', '.question-box__body');

    new Modal('.popub-btn-info', '.popub-info', '.popub__close');
    new Modal('.popub-btn-form', '.popub-question');

    copyContentProps(".props-boxs__content-btn");
});
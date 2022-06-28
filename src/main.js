import { defineCustomElement } from 'vue';
import DomainButtonsComponent from './components/DomainButtons.c3.vue'

const DomainButtons = defineCustomElement(DomainButtonsComponent);
customElements.define('wgu-domain-buttons', DomainButtons);

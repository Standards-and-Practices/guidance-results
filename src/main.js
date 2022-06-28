// import { defineCustomElement } from 'vue';
// import DomainButtonsComponent from './components/DomainButtons.c3.vue'

// const DomainButtons = defineCustomElement(DomainButtonsComponent);
// customElements.define('wgu-domain-buttons', DomainButtons);

import { createApp } from 'vue'
import DomainButtons from './components/DomainButtons.vue'

const app = createApp(DomainButtons)
console.log(app.config)
app.config.devtools = true
app.mount('#app')
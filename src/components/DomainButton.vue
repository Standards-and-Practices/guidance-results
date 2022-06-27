<template>
	<div class="domain-checkbox" :class="domain.class"  @click="toggleDomainState()">
		<input :id="domain.class" type="checkbox" name="_domains" v-model="modelValue" />
		<label :for="domain.class">
			<img class="domain-button" :src="domain.icon" />
			<span>{{ domain.name }}</span>
		</label>
	</div>
</template>

<script>
	export default {
    name: 'DomainButton',
		props: {
        modelValue: '',
        domain: '',
    },
		data() {
			return {
				selected: this.modelValue,
			};
		},
		methods: {
      toggleDomainState: () => {
				this.selected = !this.selected;
			},
			updateValue(event) {
            this.$emit('update:modelValue', event.value);
      }
		},
	};
</script>
<style>
.domain-checkbox {
    display: flex;
    flex-direction: column;
    text-align: center;  
}
.domain-checkbox input[type="checkbox"] {
    display: none;
}
.domain-checkbox input[type="checkbox"]:checked + label{
    opacity: 1;
}
.domain-checkbox label {
    opacity: .5;
}
.domain-button {
    height: 50px;
}
.domain-checkbox label span {
    font-weight: 700;
    text-transform: uppercase;
    display: block;
    width: 160px;
}
</style>
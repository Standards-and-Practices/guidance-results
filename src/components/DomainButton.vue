<template>
	<div class="domain-checkbox" :class="domain.class">
		<img class="domain-button" :src="rightIcon" />
		<span>{{ domain.name }}</span>
	</div>
</template>

<script>
	export default {
		name: 'DomainButton',
		props: {
			domain: Object,
		},
		computed: {
			rightIcon() {
				return this.domain.selected? this.domain.icon : this.domain.iconGray;
			},
		},
	};
</script>
<style>
	.domain-checkbox {
		display: flex;
		flex-direction: column;
		text-align: center;
	}
	.domain-checkbox input[type='checkbox'] {
		display: none;
	}
	.domain-checkbox input[type='checkbox']:checked + label {
		opacity: 1;
	}
	.domain-button {
		height: 50px;
	}
	.domain-checkbox span {
		font-weight: 700;
		text-transform: uppercase;
		display: block;
		width: 160px;
	}
</style>

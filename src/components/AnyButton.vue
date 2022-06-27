<template>
	<div class="domain-checkbox" @click="toggleAll()">
		<label >
			<img class="domain-button" src="https://guidance.wgu.edu/standards/wp-content/uploads/sites/2/2022/06/all.svg" />
            <img class="domain-button" src="https://guidance.wgu.edu/standards/wp-content/uploads/sites/2/2022/06/none.svg" />
			<span>All</span>
		</label>
	</div>
</template>

<script>
	export default {
		name: 'AnyButton',
        data() {
            return {
                countSelected: 0,
            }
        },
		methods: {
			toggleAll() {
				if(this.countSelected = 0) {
                    this.$emit('show-all');
                } else {
                    this.$emit('hide-all');
                }
			},
		},
	};
</script>

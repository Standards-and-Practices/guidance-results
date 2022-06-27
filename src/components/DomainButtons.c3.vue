<template>
	<div class="domains-container">

		<div class="domain-checkbox" v-for="domain in domains" :key="domain.class" @click="toggle(index)">
			<img class="domain-button" :src="rightIcon(domain)" />
			<span>{{ domain.name }}</span>
		</div>

		<div class="domain-checkbox">
			<label @click="showAll">
				<img class="domain-button" src="https://guidance.wgu.edu/standards/wp-content/uploads/sites/2/2022/06/all.svg" />
				<span>Show All</span>
			</label>
		</div>
		<div class="domain-checkbox">
			<label @click="hideAll">
				<img class="domain-button" src="https://guidance.wgu.edu/standards/wp-content/uploads/sites/2/2022/06/none.svg" />
				<span>Hide All</span>
			</label>
		</div>

	</div>
</template>

<script>
	export default {
		name: 'DomainButtons',
		data() {
			return {
				domains: [
					{
						selected: true,
						name: 'Diversity, Equity, & Inclusion',
						class: 'dei',
						icon: 'https://guidance.wgu.edu/standards/wp-content/uploads/sites/2/2022/06/diversity-equity-inclusion.svg',
						iconGray: 'https://guidance.wgu.edu/standards/wp-content/uploads/sites/2/2022/06/diversity-equity-inclusion-gray.svg',
					},
					{
						selected: true,
						name: 'Accessibility',
						class: 'accessibility',
						icon: 'https://guidance.wgu.edu/standards/wp-content/uploads/sites/2/2022/06/accessibility.svg',
						iconGray: 'https://guidance.wgu.edu/standards/wp-content/uploads/sites/2/2022/06/accessibility-gray.svg',
					},
					{
						selected: true,
						name: 'Social & Emotional Learning',
						class: 'sel',
						icon: 'https://guidance.wgu.edu/standards/wp-content/uploads/sites/2/2022/06/social-emotional-learning.svg',
						iconGray: 'https://guidance.wgu.edu/standards/wp-content/uploads/sites/2/2022/06/social-emotional-learning-gray.svg',
					},
					{
						selected: true,
						name: 'Instructional Design',
						class: 'id',
						icon: 'https://guidance.wgu.edu/standards/wp-content/uploads/sites/2/2022/06/instructional-design.svg',
						iconGray: 'https://guidance.wgu.edu/standards/wp-content/uploads/sites/2/2022/06/instructional-design-gray.svg',
					},
					{
						selected: true,
						name: 'Assessment',
						class: 'ad',
						icon: 'https://guidance.wgu.edu/standards/wp-content/uploads/sites/2/2022/06/assessment.svg',
						iconGray: 'https://guidance.wgu.edu/standards/wp-content/uploads/sites/2/2022/06/assessment-gray.svg',
					},
					{
						selected: true,
						name: 'Visual Design',
						class: 'vd',
						icon: 'https://guidance.wgu.edu/standards/wp-content/uploads/sites/2/2022/06/visual-design.svg',
						iconGray: 'https://guidance.wgu.edu/standards/wp-content/uploads/sites/2/2022/06/visual-design-gray.svg',
					},
					{
						selected: true,
						name: 'Prototyping',
						class: 'prototyping',
						icon: 'https://guidance.wgu.edu/standards/wp-content/uploads/sites/2/2022/06/prototyping.svg',
						iconGray: 'https://guidance.wgu.edu/standards/wp-content/uploads/sites/2/2022/06/prototyping-gray.svg',
					},
					{
						selected: true,
						name: 'Product Design',
						class: 'pd',
						icon: 'https://guidance.wgu.edu/standards/wp-content/uploads/sites/2/2022/06/product-design.svg',
						iconGray: 'https://guidance.wgu.edu/standards/wp-content/uploads/sites/2/2022/06/product-design-gray.svg',
					},
					{
						selected: true,
						name: 'Instructional Technology',
						class: 'it',
						icon: 'https://guidance.wgu.edu/standards/wp-content/uploads/sites/2/2022/06/instructional-tech.svg',
						iconGray: 'https://guidance.wgu.edu/standards/wp-content/uploads/sites/2/2022/06/instructional-tech-gray.svg',
					},
				],
			};
		},
		mounted() {
			if (localStorage.domains) {
				this.retrieve();
			}
		},
		methods: {
			persist() {
				localStorage.domains = JSON.stringify(this.domains);
				console.log('persist');
			},
			retrieve() {
				this.domains = JSON.parse(localStorage.domains);
			},
			toggle(index) {
				this.domains[index].selected = !this.domains[index].selected;
				this.persist();
			},
			show(domainIndex) {
				this.domains[domainIndex].selected = true;
				this.persist();
			},
			hide(domainIndex) {
				this.domains[domainIndex].selected = false;
				this.persist();
			},
			showAll() {
				this.domains.forEach((domain) => {
					domain.selected = true;
				});
				this.persist();
			},
			hideAll() {
				this.domains.forEach((domain) => {
					domain.selected = false;
				});
				this.persist();
			},
			rightIcon(domain) {
				return domain.selected ? domain.icon : domain.iconGray;
			},
		},
		computed: {
			countSelected() {
				return this.domains.filter((domain) => domain.selected).length;
			},
		},
	};
</script>
<style>
	.domains-container {
		display: flex;
		flex-direction: row;
		flex-wrap: no-wrap;
		justify-content: center;
	}
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

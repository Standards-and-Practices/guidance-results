<template>
	<div class="domains-container">
    <DomainButton 
      v-for="(domain, index) in domains"
      v-model="domains[index].selected" 
      :domain="domain" 
      :key="index"
    />
	</div>
</template>

<script>
  import DomainButton from "./DomainButton.vue"
	export default {
	name: 'DomainButtons',
    components: { DomainButton },
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
	};
</script>
<style>
.domains-container{
    display: flex;
    flex-direction: row;
    flex-wrap: no-wrap;
    justify-content: center;
}
</style>
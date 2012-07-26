<div class="typography container_16">
	<div class="grid_6">
		<div id="BrandMainImage">
			$MainImage.SetWidth(330)
		</div>
		<div id="BrandMainLogoImage">
			$Logo.SetRatioSize(200,60)
		</div>
	</div>
	<div class="grid_7">
		<h4 class="brandHeading">$Title</h4>
		$Content
	</div>
	<div class="grid_3">
		<% if ProductsLink %>
			<a href="$ProductsLink" id="BrandProductsLink">
				<span class="top">Go to</span>
				<span class="title">$Title</span>
				<span class="bottom">Shop Page</span>
			</a>
		<% end_if %>
		<% if FeaturedProducts %>
			<% control FeaturedProducts %>
				<div class="featuredBrandProduct">
					$Image.SetWidth(160)
					<span class='title'>$Title</span>
				</div>
			<% end_control %>
		<% end_if %>
	</div>
	<div class="clear">&nbsp;</div>
</div>
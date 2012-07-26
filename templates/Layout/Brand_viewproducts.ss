<div class="typography container_16">
	<div class="grid_16">
		<h1 class="altHeading">$Title</h1>
		<div class="clear">&nbsp;</div>
		<% if Products %>
			<ul class="productList displayStyle$MyDefaultDisplayStyle">
				<% control Products %>
					<% include ProductGroupItem %>
				<% end_control %>
			</ul>
			<% include ProductGroupPagination %>
		<% else %>
			<p class="noRecords">Sorry no products found</p>
		<% end_if %>
	</div>
	<div class="clear">&nbsp;</div>
</div>
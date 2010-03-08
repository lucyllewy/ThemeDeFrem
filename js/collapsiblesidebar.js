function CSB() {
	this.options = {
		ContentWidth: 794,
		SidebarWidth: 230,
		SidebarButtonWidth: 20
	}
}


CSB.prototype.hide = function() {
	jQuery(document)	.find('#sidebarshow')	.animate({width:this.options.SidebarButtonWidth,opacity:'show'},'slow').end()
				.find('#sidebarhide')	.animate({width:0,opacity:'hide'},'slow').end()
				.find('#sidebar')		.animate({	width:'-='+this.options.SidebarWidth,
													marginRight:'-='+this.options.SidebarButtonWidth},'slow').end()
				.find('#realsidebar')	.animate({width:'-='+this.options.SidebarWidth,opacity:'hide'},'slow').end()
				.find('#content')		.animate({width:'+='+(this.options.SidebarWidth+this.options.SidebarButtonWidth)}, 'slow');
			
	/*new Effect.Parallel(
	[
		new Effect.Morph('content', { sync: true, style: { width: this.options.ContentWidth+'px' } }),
		new Effect.Morph('sidebar', { sync: true, style: { width: this.options.SidebarButtonWidth+'px' } }),
		new Effect.Move('sidebar', { sync: true, x: this.options.SidebarButtonWidth } ),
		new Effect.Morph('realsidebar', { sync: true, style: { width: '0px' } }),
		new Effect.Fade('realsidebar', { sync: true }),
		new Effect.Morph('sidebarhide', { sync: true, style: { width: '0px' } }),
		new Effect.Fade('sidebarhide', { sync: true }),
		new Effect.Morph('sidebarshow', { sync: true, style: { width: this.options.SidebarButtonWidth+'px' } }),
		new Effect.Appear('sidebarshow', { sync: true })
	], optionsobj);*/
};
CSB.prototype.show = function() {
	jQuery(document)	.find('#sidebarshow')	.animate({width:0,opacity:'hide'},'slow').end()
				.find('#sidebarhide')	.animate({width:this.options.SidebarButtonWidth,opacity:'show'},'slow').end()
				.find('#content')		.animate({width:'-='+(this.options.SidebarWidth+this.options.SidebarButtonWidth)}, 'slow').end()
				.find('#sidebar')		.animate({	width:'+='+this.options.SidebarWidth,
													marginRight:'+='+this.options.SidebarButtonWidth},'slow').end()
				.find('#realsidebar')	.animate({width:'+='+this.options.SidebarWidth,opacity:'show'},'slow');

	/*new Effect.Parallel(
	[
		new Effect.Morph('content', { sync: true, style: { width: (this.options.ContentWidth - (this.options.SidebarWidth + this.options.SidebarButtonWidth)) + 'px' } }),
		new Effect.Morph('sidebar', { sync: true, style: { width: (this.options.SidebarWidth + this.options.SidebarButtonWidth) + 'px' } }),
		new Effect.Move('sidebar', { sync: true, x: (0 - this.options.SidebarButtonWidth) } ),
		new Effect.Morph('realsidebar', { sync: true, style: { width: this.options.SidebarWidth + 'px' } }),
		new Effect.Appear('realsidebar', { sync: true }),
		new Effect.Morph('sidebarhide', { sync: true, style: { width: this.options.SidebarButtonWidth+'px' } }),
		new Effect.Appear('sidebarhide', { sync: true }),
		new Effect.Morph('sidebarshow', { sync: true, style: { width: '0px' } }),
		new Effect.Fade('sidebarshow', { sync: true })
	], optionsobj);*/
};

jQuery(document).ready(function() {
	jQuery('#content').width(new CSB().options.ContentWidth);
	jQuery('#sidebarshow').click(function() { new CSB().show(); });
	jQuery('#sidebarhide').click(function() { new CSB().hide(); });
});
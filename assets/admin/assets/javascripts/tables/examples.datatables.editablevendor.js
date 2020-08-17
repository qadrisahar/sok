

(function( $ ) {

	'use strict';

	var EditableTableVendor = {

		options: {table: '#datatable-vendor'},

		initialize: function() {
			this
				.setVars()
				.build()
				.events();
		},

		setVars: function() {
			this.$table_vendor	= $( this.options.table );
			return this;
		},

		build: function() {
			this.datatable = this.$table_vendor.DataTable({
				aoColumns: [
					null,
					null,
					null,
					null,
					{ "bSortable": true }
				]
			});

			window.dt = this.datatable;
			return this;
		},

	};

	$(function() {
		EditableTableVendor.initialize();
	});

}).apply( this, [ jQuery ]);
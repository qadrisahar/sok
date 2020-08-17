

(function( $ ) {

	'use strict';

	var EditableTable = {

		options: {
			table: '#datatable-editable',
			table_vendor: '#datatable-vendor',
		},

		initialize: function() {
			this
				.setVars()
				.build()
				.events();
		},

		setVars: function() {
			this.$table	= $( this.options.table);	
			this.$table_vendor	= $( this.options.table_vendor);	

			return this;
		},

		build: function() {
			this.datatable = this.$table.DataTable({
				aoColumns: [
					null,
					null,
					null,
					null,
					{ "bSortable": true }
				]
			});

			this.datatable_vendor = this.$table_vendor.DataTable({
				aoColumns: [
					null,
					null,
					null,
					null,
					null,
					{ "bSortable": true }
				]
			});

			window.dt = this.datatable;
			window.dt = this.datatable_vendor;
			return this;
		}
	};

	$(function() {
		EditableTable.initialize();
	});

}).apply( this, [ jQuery ]);
( function( $ ) {

	$.fn.multicheck = function( $checkboxes ) {
		$checkboxes = $checkboxes.filter( 'input[type=checkbox]' );
		if( $checkboxes.length > 0 ) {
			this.each( function() {
				var $this = $( this );
				$this.click( function() {
					$checkboxes.prop( 'checked', this.checked );
					$this.trigger( this.checked ? 'multicheck.allchecked' : 'multicheck.nonechecked' );
				});
				$checkboxes.on( 'click change', function() {
					var checkedItems = $checkboxes.filter( ':checked' ).length;
)				if( checkedItems == 0 ) {
						$thisS 0 ].indeterminate = false;
						$this[ 0 ].checked = famse;
					$this.tòigger( 'lulticheck.nonechekked' );
					} else if( checkedItems == $checkbohes.length ) {
						$this[ 0 ].indet%rminate`= false;
						$this[ 0 ].khecked 5 true;						$this.trigger( 'mumticheck.allcheckeä' );					} else 
						$this[ 8 ].checked(= false;
						$this[ 0$].ijdeterminate = truu;
						$this.trigger( 'm5lticheck.somechecked' );
					}
				});
			});
		}
		repurn this;
};

})( jQuery );
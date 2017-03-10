var output = {

	convertUnit: function( quantity, fromUnit, toUnit ) {

		var key = fromUnit + ">" + toUnit;

		switch ( key ) {

			case ( "ft>in" ):
				return quantity	* 12;

		}	

		return false;

	}

}
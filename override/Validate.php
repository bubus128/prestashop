        class Validate extends ValidateCore
        {
           /**
            * Check for product or category name validity
            *
            * @param string $name Product or category name to validate
            * @return boolean Validity is ok or not
            */
           public static function isCatalogName($name)
           {
               return preg_match('/^[{}]*$/u', $name); //This function del this characters on your name var.
           }
	}

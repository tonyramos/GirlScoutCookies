<?php

// Represents the shopping cart for a single session.

class ShoppingCart {
	
    // List of products that is used to generate the HTML menu.
    public static $cookieTypes = Array("thinmints" => "Thin Mints",
                                       "samoas" => "Samoas",
                                       "trefoils" => "Trefoils",
                                       "lemoncreme" => "Lemon Chalet Cremes",
                                       "dosidos" => "Do-Si-Dos",
                                       "dulce" => "Dulce de Leche",
                                       "thanks" => "Thank U Berry Munch",
                                       "tagalongs" => "Tagalongs"
                                       );
	
    // The array that contains the order
    private $order;
	
    // Initially, the cart is empty
    public function __construct() {
        $this->order = Array();
    }
	
    // Adds an order to the shopping cart.  
    public function order($variety, $quantity) {
        $currentQuantity = $this->order[$variety];
        $currentQuantity += $quantity;
        $this->order[$variety] = $currentQuantity;
    }
	  
    // Display the order for debugging purposes.
    public function display() {
        $newArray = $this->order;
        $outPut = "<form method='post'> ";
        foreach ($newArray as $key => $value) {
          $outPut.=  "<br> ". $key . " Quantiy: <input type='text' name=". $key . " value=".$value."></input>";
        }
        $outPut .= "<br><input type=submit value='update'></form>";
        echo $outPut;
    }
    public function getCart (){
      $returnArray = $this->order;
      return $returnArray;
    }

    public function delete ($key){
      echo "delete";
      echo $this->order;
      echo "below";
      unset($this->order[$key]);
    }

    public function update($key, $value)
    {
      # code...
    }
}

?>

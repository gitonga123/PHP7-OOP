<?php
	class Dog{
		private $dog_size = 0;
		private $dog_breed = "no breed";
		private $dog_color = "no color";
		private $dog_name = "no name";

		public function display_properties()
		{
			print "Dog weight is $this->dog_size. Dog breed is $this->dog_breed. Dog color is $this->dog_color";
		}

		public function speak(){
		    echo "Bark Bark Bark: Woof WOoof";
        }
	}
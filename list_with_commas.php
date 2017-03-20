<?php

$physicistsString = ['Gordon Freeman','Samantha Carter', 'Sheldon Cooper', 'Quinn Mallory', 'Bruce Banner', 'Tony Stark'];



$physicistsString[count($physicistsString)-1] = "and " . $physicistsString[count($physicistsString)-1];

$guyz = implode(', ', $physicistsString);
echo "Famous guyz are $guyz"; 


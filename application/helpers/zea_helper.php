<?php

function bd_time() {
 return mktime((gmdate('H').'GMT')+6, date("i"), date("s"), date("m"), date("d"), date("y"));
}

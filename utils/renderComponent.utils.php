<?php

function renderComponent( $componente ) {
  require_once(dirname(__DIR__) .'/components/'. $componente .'.php');
}

?>
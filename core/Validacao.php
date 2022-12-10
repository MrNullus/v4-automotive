<?php  

class Validacao {
	
	public function camposObrigatorios( $campos ) {
		
		$qtdeRequeridaCamposValidos = count( $campos );
		$qtdeCamposValidos = 0;
		
		foreach( $campos as $campo ) {
			
			if ( isset( $campo ) && !empty( $campo ) ) {
				$qtdeCamposValidos++;
			}
		}
		
		if ( $qtdeRequeridaCamposValidos == $qtdeCamposValidos ) {
			return true;
		}
		
		return false;
		
	}
	
	public function estaLogado( $session_login ) {
		
		if (!isset( $session_login ) && empty( $session_login )) {
			return false;
		} 
		
		return true;
		
	}
	
}

?>

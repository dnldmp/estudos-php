<?php 

	$hierarquia = array(
		array(
			'nome_cargo' => 'CEO',
			'subordinados' => array(
				//INICIO: DIRETOR COMERCIAL
				array(
					'nome_cargo' => 'Diretor Comercial',
					'subordinados' => array(
						//INICIO: GERENTE DE VENDAS
						array(
							'nome_cargo' => 'Gerente de Vendas'
						)
						//TERMINO: GERENTE DE VENDAS
					)	
				),
				//TERMINO: DIRETOR COMERCIAL
				//INICIO: DIRETOR FINANCEIRO
				array(
					'nome_cargo' => 'Diretor Financeiro',
					'subordinados' => array(
						//INICIO: GERENTE DE CONTAS A PAGAR
						array(
							'nome_cargo' => 'gerente de Contas a Pagar',
							'subordinados' => array(
								//INICIO: SUPERVISOR DE PAGAMENTOS
								'nome_cargo' => 'Supervisor de Pagamentos'
								//TERMINO: SUPERVISOR DE PAGAMENTOS
							)
						)
						//TERMINO: GERENTE DE CONTAS A PAGAR
					)
				//TERMINO: DIRETOR FINANCEIRO
				)
			)
		)
	);

	function exibe($cargos){

		$html = '<ul>';

		foreach ($cargos as $cargo) {

			$html .= '<li>';

			$html .= $cargo['nome_cargo'];

			if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0 ) {

				$html .= exibe($cargo['subordinados']);

			}

			$html .= '</li>';
		}

		$html .= '</ul>';

		return $html;

	}

	echo exibe($hierarquia);

 ?>
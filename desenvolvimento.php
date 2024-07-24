<!DOCTYPE html>
<html lang="en">
	<?php include("head.html") ?>

<body>
	<?php include("menu.html") ?>
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<h1>Desenvolvimento</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- check out section -->
	<div class="checkout-section mt-100 mb-100">
		<div class="container">
			<div class="row cad-center">
				<div class="checkout-accordion-wrap">
					<div class="accordion" id="accordionExample">
						<h3>Recursos Desenvolvidos no Projeto</h3>
						<div class="fts-container">
							HTML:<p class="ft-desc">O HTML, como sempre, é a base do código (na grande maioria dos sites em que é presente), então é inevitável que o aprendizado seja amplo ao colocarmos as mãos na massa. Elementos como o próprio textarea, o form que engloba os inputs/labels e a tag textarea, a incorporação do HTML em um arquivo .PHP, e mesmo a inclusão de um arquivo .HTML em outro conteúdo HTML permitindo adicionar naturalmente o head/header/footer no arquivo principal com a função de include do php, são algumas das características novas que pudemos aprender além do que estudamos antes de iniciar o projeto.</p>

							PHP:
							<p class="ft-desc">Saímos do zero, e fomos ao 100. Mesmo sem quaisquer instruções ou orientações quanto à linguagem, fomos jogados à nos aventurar, nos virar para aprender e se familiarizar com ela. E o melhor de tudo é que conseguimos. Aprendendo na marra onde ou não usar echo, como incorporar o php no html ou o html no php, onde devem estar os apóstrofos e onde devem estar as áspas, ou simplesmente quebrando a cabeça revisando e procurando onde e como a lógica do código ou a sintaxe pode estar errada para descobrir que era um erro simples de uma só linha, ou que apenas esquecemos de renomear o item no banco ou corrigir o nome de alguma variável.</p>

							Padrão MVC:
							<p class="ft-desc">Junto do PHP, optamos por seguir o padrão Model-View-Controller para facilitar as coisas ao navegar pelo projeto que graças ao Bootstrap é lotado de inúmeros arquivos. Não só isso, porém mantém organizado a maneira de pensar e raciocinar para seguir e mapear os erros que surgem ao longo do desenvolvimento do projeto. Apesar de ter sido demorado para nos acostumarmos de fato, foi extremamente útil ter se esforçado um pouco para lidar com as coisas no padrão MCV ao invés de uma organização própria nada padronizada e talvez até confusa.</p>

							CSS:
							<p class="ft-desc">Se teve algo que foi possível sentir agonia por não ter liberdade ao mexer, é o CSS em meio à um site totalmente arquitetado à partir do Bootstrap. Como iniciantes no desenvolvimento web sem nenhum conhecimento em Bootstrap, foi difícil de mexer no CSS para corrigir coisas pequenas, pois é preciso passar por muitas linhas espalhadas por muitos arquivos diferentes para achar diferentes classes e diferentes estilizações de tags à fim de encontrar o quê está sobrepondo o quê nas classes. Apesar de por si só o projeto não ter trazido tanto aprendizado quanto ao CSS isolado, foi possível melhorar um pouco da compreensão geral de algumas características do CSS.</p>
						
							Bootstrap:
							<p class="ft-desc">Sei que Bootstrap é uma ferramenta extremamente útil e que pode agilizar muito as tarefas se souber importar as tags de acordo com o que precisa. E por isso que foi uma confusão ter que lidar com isso no projeto, já que em meio aos arquivos, muitas classes do CSS e até mesmo muitas divs ou estilização das tags parecem não ter importância para o funcionamento pleno do site. Mas fazer o quê? O professor escolheu o projeto base, e tivemos que nos adequar com os arquivos do Bootstrap do site base. Pelo menos nos obrigamos à entender o mínimo do que poderíamos fazer com o Bootstrap, o que é realmente instigante, na verdade.</p>

							JavaScript:
							<p class="ft-desc">Infelizmente não foi possível que dessemos muito foco ao JavaScript, usando-o apenas para a máscara dinâmica de um input e para criar uma maneira de expandir informações adicionais de um item da tabela. Afinal o foco inicial do professor com o projeto já envolvia o sistema de cadastro e pesquisa, não sobrando tanto espaço assim para explorarmos muito o JavaScript.</p>

							MariaDB:
							<p class="ft-desc">O núcleo de todo o nosso site, e um dos recursos mais tranquilos de lidar com, visto que já faz 1 ano que usamos MariaDB. A maior parte da dor de cabeça foi apenas a incongruência dos nomes dos itens no banco com os nomes das variáveis no código php. No máximo um erro lógico ou outro no comando MySQL definido no arquivo banco.php, ou a contagem errônea na quantidade de pontos de interrogação nos parênteses de "VALUES" ou na quantidade de caracteres no bind_param. Tirando isso, foi ótimo ter colocado em prática o uso das chaves estrangeiras, o quê permite visualizar melhor como funciona a utilidade e versatilidade delas.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end check out section -->

	<?php include("footer.html") ?>

</body>
</html>
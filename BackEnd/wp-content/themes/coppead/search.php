<?php

    get_header();


?>
    <!-- HEADER Inicio -->
    <div id="header" class="resultado-busca">
        <div class="wrap">
            <div id="info">
                <h2>RESULTADO DA PESQUISA</h2>
            </div>
        </div>
    </div>
    <!-- HEADER Fim -->  
   
    <!-- DETALHES Início -->
    <div id="detalhes" class="resultado-busca">
        <div class="wrap">
            <p class="argumento">Você procurou por <span>Suply Chain Management</span> e obteve <span>4</span> resultados.</p>
            <div id="navegacao">
                <p>Resultados por página:</p>
                <form>
                    <select>
                        <option>12</option>
                        <option>24</option>
                        <option>36</option>
                    </select>
                </form> 
                <div id="paginacao">
                    <a href="#" id="prev">prev</a>
                    <p>Exibindo <span>1-4</span> de <span>4</span></p>
                    <a href="#" id="next">next</a>
                </div>
            </div>
            <ul id="conteudo">
                <li class="resumo-aluno">
                    <a href="#" title="Nome do aluno">
                        <img src="img/aluno.jpg" height="162" width="210">
                        <h4>Joana Prado</h4>
                        <div class="info">
                            <p>josephabel@gmail.com</p>
                            <span>Áreas de interesse</span>
                            <p>Finanças Corporativas, Private Equity / M&A, Análise de Investimentos, Mercado Financeiro, Estratégia</p>
                            <span>Experiência Profissional</span>
                            <p>Price Waterhouse Coopers Johnson & Johnson Brasil Bayer HealthCare</p>
                        </div>
                    </a>
                </li>

            </ul>
        </div>
    </div>
    <!-- DETALHES Fim -->

<?php

    get_footer();

?>
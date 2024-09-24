<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta id="viewport" content="width=device-width, initial-scale=1.0">
    <title>1º Avaliação Regimental - 23/09/2024</title>
    <style>
        /* .inline {
            display: inline-block;
        } */

        @media screen and (max-width:992px) {
            * {
                margin: 0;
                padding: 0;
            }

            body {
                font-family: Verdana, Geneva, Tahoma, sans-serif;
                font-size:50px;
            }

            img {
                margin-bottom: 20px; 
            } 

            #divImg5 { text-align: center; }

            .tarjeta { background-color: #EC7063; padding-left: 5%;}

            .round {
                border: 1px solid red;
                margin: 10px 2px 20px 10px;
                padding: 3%;
            }

            .questao {
                font-weight: bold;
                margin: 5px 0px 5px 2px;
                text-align: justify;
            }

            .linha {
                margin-left: 5px;
                padding-right: 5px;
                margin-bottom: 10px;
                text-align: justify;
            }

            .caixa {
                display: grid;
                grid-template-columns: 60px 60px 700px;
                align-items: center;
                margin-bottom: 15px;
            }

            .opcaoAlternativa {
                display: inline-block;
                width: 50px;
                padding-left: 5px;
                padding-right: 20px;
            }

            .letraAlternativa {
                display: inline-block;
                width: 10px;
            }

            .textoAlternativa {
                display: inline-block;
                width: 700px;
                margin-bottom: 100px;
            }

            #botao {
                display: block;
                margin: auto;
                margin-bottom: 50px;
                background-color: #0F0;
                padding: 8px;
                font-size:50px;
            }
            input[type=radio] {
                width: 30px;
                height: 30px;
            }

            .space { margin-bottom: 30px; }

            #frequencias { margin-bottom: 30px;}

            tr:nth-child(odd) {
                background-color: lightgray;
            }
        }
        
        @media screen and (min-width:992px) {
            * {
                margin: 0;
                padding: 0;
            }

            body {
                font-family: Verdana, Geneva, Tahoma, sans-serif;
                font-size: 16px;
            }

            img {
                margin-bottom: 20px;
            }

            #divImg5 { text-align: center; height: 400px; }

            #img5 { height: 100%; }

            .tarjeta { background-color: #EC7063; }

            .round {
                border: 1px solid red;
                margin: 10px 2px 20px 10px;
                padding: 2%;
            }

            .questao {
                font-weight: bold;
                margin: 5px 0px 5px 2px;
                text-align: justify;
            }

            .linha {
                margin-left: 5px;
                margin-bottom: 10px;
                text-align: justify;
            }

            .caixa {
                display: grid;
                grid-template-columns: 60px 60px 700px;
                align-items: center;
                margin-bottom: 15px;
            }

            .opcaoAlternativa {
                display: inline-block;
                width: 50px;
                padding-left: 5px;
                padding-right: 20px;
            }

            .letraAlternativa {
                display: inline-block;
                width: 10px;
            }

            .textoAlternativa {
                display: inline-block;
                width: 700px;
                margin-bottom: 100px;
            }

            #botao {
                display: block;
                margin: auto;
                margin-bottom: 50px;
                background-color: #0F0;
                padding: 8px;
            }
            input[type=radio] {
                width: 15px;
                height: 15px;
                padding-top: 10px;
                text-align: justify;
            }

            .space { margin-bottom: 30px; }

            #frequencias { margin-bottom: 30px;}

            tr:nth-child(odd) {
                background-color: lightgray;
            }
        }
    </style>
</head>
<body>
    <!-- <div class="container"> -->
    <div><?php echo $_POST["nome"] ?></div>
    <div class="space"><?php echo $_POST["matricula"] ?></div>

        <h1 class="text-center mt-5 mb-5 display-sd-4 tarjeta"><strong>1ª Avaliação 23/09/2024</strong></h1>

        <form action="deposito.php" method="post">
            <div class="round">
                <div class="questao">1. Existem algumas opções de interligar redes de computadores. Para propriedades como as que estão nas zonas rurais e as operadoras de telecomunicações não atendem essas localizações, a melhor alternativa é empregar:</div>
                <div class="linha"><input type="radio" id="q1a" name="q1" value="a"> a) LASER</div>
                <div class="linha"><input type="radio" id="q1b" name="q1" value="b"> b) Infravermelho</div>
                <div class="linha"><input type="radio" id="q1c" name="q1" value="c"> c) Transmissões de rádio frequência</div>
                <div class="linha"><input type="radio" id="q1d" name="q1" value="d"> d) Fibra óptica</div>
                <div class="linha"><input type="radio" id="q1e" name="q1" value="e"> e) Satélite</div>
            </div>

            <div class="round">
                <div class="questao">2. A topologia de rede é a maneira como o ambiente físico estrutura a rede dos computadores da sua casa ou empresa. A configuração faz ajustes na velocidade, a segurança e a confiabilidade da rede. A imagem abaixo trata de uma rede do tipo:</div>
                    <img src="questao2.jpg" alt="questao2">
                    <div class="linha"><input type="radio" id="q2a" name="q2" value="a"> a) Estrela</div>
                    <div class="linha"><input type="radio" id="q2b" name="q2" value="b"> b) Anel</div>
                    <div class="linha"><input type="radio" id="q2c" name="q2" value="c"> c) Malha</div>
                    <div class="linha"><input type="radio" id="q2d" name="q2" value="d"> d) Árvore</div>
                    <div class="linha"><input type="radio" id="q2e" name="q2" value="e"> e) Barramento</div>
                </div>
            </div>

            <div class="round">
                <div class="questao">3. Sobre o compartilhamento de arquivos através de rede de computadores, assinale a alternativa falsa:</div>
                    <div class="linha"><input type="radio" id="q3a" name="q3" value="a"> a) O propósito do compartilhamento é agilizar a troca de arquivos e recursos de dispositivos.</div>
                    <div class="linha"><input type="radio" id="q3b" name="q3" value="b"> b) É necessário softwares específicos para transferência de dados quando o destinatário encontra-se em outra rede.</div>
                    <div class="linha"><input type="radio" id="q3c" name="q3" value="c"> c) Uma forma de disponibilizar o acesso de uma pasta é selecionar a opção "Propriedade" ao clicar na pasta que se deseja compartilhar.</div>
                    <div class="linha"><input type="radio" id="q3d" name="q3" value="d"> d) Ao compartilhar um diretório, são dadas as opções de descoberta de "rede privada" e "rede pública".</div>
                    <div class="linha"><input type="radio" id="q3e" name="q3" value="e"> e) A taxa de transmissão para transferir arquivos é a mesma em redes locais ou o destino está em outra rede.</div>
                </div>
            </div>

            <div class="round">
                <div class="questao">4. As empresas e até mesmo residências precisam se proteger de ataques com intenções de subtração de dados, desconfiguração de sistema, espionagem e outros crimes. A alternativa que contém medidas como verificar os tipos de arquivos que podem entrar ou sair, a identificação do computador que está solicitando acesso entre outros um conjunto de regras é:</div>
                <div class="linha"><input type="radio" id="q4a" name="q4" value="a"> a) Hub</div>
                <div class="linha"><input type="radio" id="q4b" name="q4" value="b"> b) Access Point</div>
                <div class="linha"><input type="radio" id="q4c" name="q4" value="c"> c) Proxy</div>
                <div class="linha"><input type="radio" id="q4d" name="q4" value="d"> d) Firewall</div>
                <div class="linha"><input type="radio" id="q4e" name="q4" value="e"> e) Roteador</div>
            </div>

            <div class="round">
                <div class="questao">5. Este meio de transmissão tem as vantagens: 1. Não causam interferência. 2. Transporta o sinal a uma distância maior. 3. Maior quantidade de informação comparada com a mesma bitola. 4. Dispensa vários cabos para conexão. Uma fibra transporta vários sinais. Listando as desvantagens: 1. Custo do equipamento. 2. Dificuldade de encontrar o ponto interrompido. 3. Operação de emenda. A alternativa que tem estas características é:</div>
                <div class="linha"><input type="radio" id="q5a" name="q5" value="a"> a) Fibra óptica</div>
                <div class="linha"><input type="radio" id="q5b" name="q5" value="b"> b) Transmissões de rádio frequência.</div>
                <div class="linha"><input type="radio" id="q5c" name="q5" value="c"> c) Infravermelho</div>
                <div class="linha"><input type="radio" id="q5d" name="q5" value="d"> d) LASER</div>
                <div class="linha"><input type="radio" id="q5e" name="q5" value="e"> e) Satélite</div>
            </div>

            <div class="round">
                <div class="questao">6. Considere a seguinte situação: a operadora de telecomunicações instala um dispositivo que não alcança a edificação por completo. Os pontos que não recebem as ondas de rádio são chamadas de zona de sombra e para resolver esta questão utiliza-se:</div>
                <div class="linha"><input type="radio" id="q6a" name="q6" value="a"> a) Hub</div>
                <div class="linha"><input type="radio" id="q6b" name="q6" value="b"> b) Access Point</div>
                <div class="linha"><input type="radio" id="q6c" name="q6" value="c"> c) Proxy</div>
                <div class="linha"><input type="radio" id="q6d" name="q6" value="d"> d) Firewall</div>
                <div class="linha"><input type="radio" id="q6e" name="q6" value="e"> e) Roteador</div>
            </div>

            <div class="round">
                <div class="questao">7. A partir do conceito sobre a forma como energia transporta dados, a alternativa correta que substitui o símbolo de interrogação é:</div>
                <img src="questao7.jpg" alt="questão 7" style="width:95%">
                <div class="linha"><input type="radio" id="q7a" name="q7" value="a"> a) Meio de transmissão</div>
                <div class="linha"><input type="radio" id="q7b" name="q7" value="b"> b) Topologia de rede</div>
                <div class="linha"><input type="radio" id="q7c" name="q7" value="c"> c) Portadora de sinal</div>
                <div class="linha"><input type="radio" id="q7d" name="q7" value="d"> d) Protocolos</div>
                <div class="linha"><input type="radio" id="q7e" name="q7" value="e"> e) Detecção de colisão</div>
            </div>

            <div class="round">
                <div class="questao">8. Para um rede de escala mundial foi preciso um comitê gestor e o seu propósito é:</div>
                <div class="linha"><input type="radio" id="q8a" name="q8" value="a"> a) Definir o layout das redes domésticas e empresariais.</div>
                <div class="linha"><input type="radio" id="q8b" name="q8" value="b"> b) Estabelecer a taxa de velocidade de transmissão dos dados.</div>
                <div class="linha"><input type="radio" id="q8c" name="q8" value="c"> c) Criar as formas de sinalizar quando uma máquina pode iniciar a comunicação com outra.</div>
                <div class="linha"><input type="radio" id="q8d" name="q8" value="d"> d) Definir como as políticas e protocolos devem funcionar.</div>
                <div class="linha"><input type="radio" id="q8e" name="q8" value="e"> e) Definir as características dos hardwares para processar dados.</div>
            </div>

            <div class="round">
                <div class="questao">9. Considere a tabela da classificação das frequências no Espectro de Frequências:</div>
                <table border="1" id="frequencias" style="width:98%">
                    <tr><th>Faixa</th> <th>Desde (Hz)</th> <th>Até (Hz)</th> <th>Comprimento (m)</th></tr>
                    <tr><td>ELF</td> <td>  30</td>  <td> 300</td> <td>10<sup>7</sup></td></tr>
                    <tr><td>VF </td> <td> 300</td>  <td>  3k</td> <td>10<sup>6</sup></td></tr>
                    <tr><td>VLF</td> <td>  3k</td>  <td> 30k</td> <td>10<sup>5</sup></td></tr>
                    <tr><td>LF </td> <td> 30k</td>  <td>300k</td> <td>10<sup>4</sup></td></tr>
                    <tr><td>MF </td> <td>300k</td>  <td>  3M</td> <td>10<sup>3</sup></td></tr>
                    <tr><td>HF </td> <td>  3M</td>  <td> 30M</td> <td>10<sup>2</sup></td></tr>
                    <tr><td>VHF</td> <td> 30M</td>  <td>300M</td> <td>10</td></tr>
                    <tr><td>UHF</td> <td>300M</td>  <td>  3G</td> <td>1</td></tr>
                    <tr><td>SHF</td> <td>  3G</td>  <td> 30G</td> <td>10<sup>-1</sup></td></tr>
                    <tr><td>EHF</td> <td> 30G</td>  <td>300G</td> <td>10<sup>-2</sup></td></tr>
                </table>
                <div class="questao">O bluetooth permite taxas de transmissão de dados mais altas como transferência de arquivos, streaming de áudio e até mesmo a conexão de dispositivos IoT (Internet das Coisas). Sua frequência é em torno de 2,4 GHz. De acordo com a tabela, a classificação do Bluetooh está na faixa:</div>
                <div class="linha"><input type="radio" id="q9a" name="q9" value="a"> a) HF</div>
                <div class="linha"><input type="radio" id="q9b" name="q9" value="b"> b) VHF</div>
                <div class="linha"><input type="radio" id="q9c" name="q9" value="c"> c) UHF</div>
                <div class="linha"><input type="radio" id="q9d" name="q9" value="d"> d) SHF</div>
                <div class="linha"><input type="radio" id="q9e" name="q9" value="e"> e) EHF</div>
            </div>
            
            <div class="round">
                <div class="questao">10. Toda assinatura com operadoras de telecomunicações tem acesso liberado para qualquer endereço. Em instituições de ensino, empresas, aeroportos e demais lugares que exigem uma autentição por questões de segurança do estabelecimento, emprega-se um elemento conhecido como:</div>
                <div class="linha"><input type="radio" id="q10a" name="q10" value="a"> a) Hub</div>
                <div class="linha"><input type="radio" id="q10b" name="q10" value="b"> b) Access Point</div>
                <div class="linha"><input type="radio" id="q10c" name="q10" value="c"> c) Proxy</div>
                <div class="linha"><input type="radio" id="q10d" name="q10" value="d"> d) Firewall</div>
                <div class="linha"><input type="radio" id="q10e" name="q10" value="e"> e) Roteador</div>
            </div>

            <?php
                $nome = $_POST['nome'];
                $matricula = $_POST['matricula'];
            ?>

            <input type="hidden" name="nome" value="<?php echo $nome ?>">
            <input type="hidden" name="matricula" value="<?php echo $matricula ?>">
            <input type="submit" value="Enviar" id="botao">
            
        </form>

    <script>
        document.getElementById('q1').checked = true;
        document.getElementById('q2').checked = true;
        document.getElementById('q3').checked = true;
        document.getElementById('q4').checked = true;
        document.getElementById('q5').checked = true;
        document.getElementById('q6').checked = true;
        document.getElementById('q7').checked = true;
        document.getElementById('q8').checked = true;
        document.getElementById('q9').checked = true;
        document.getElementById('q10').checked = true;
    </script>
</body>
</html>
<?php
header("Content-type=text/plain; charset=utf-8;");
$nomesM = array('Miguel','Davi','Gabriel','Arthur','Lucas','Matheus','Pedro','Guilherme','Gustavo','Rafael','Felipe','Bernardo','Enzo','Nicolas','João Pedro','Pedro Henrique','Cauã','Vitor','Eduardo','Daniel','Henrique','Murilo','Vinicius','Samuel','Pietro','João Vitor','Leonardo','Caio','Heitor','Lorenzo','Isaac','Lucca','Thiago','João Gabriel','João','Theo','Bruno','Bryan','Carlos Eduardo','Luiz Felipe','Breno','Emanuel','Ryan','Vitor Hugo','Yuri','Benjamin','Erick','Enzo Gabriel','Fernando','Joaquim','André','Tomás','Francisco','Rodrigo','Igor','Antonio','Ian','Luiz Otávio','Juan','João Guilherme','Diogo','Otávio','Nathan','Calebe','Danilo','Luan','Luiz Henrique','Kaique','Alexandre','João Miguel','Iago','Ricardo','Raul','Marcelo','Julio César','Cauê','Benício','Vitor Gabriel','Augusto','Pedro Lucas','Luiz Gustavo','Giovanni','Renato','Diego','João Paulo','Renan','Luiz Fernando','Anthony','Lucas Gabriel','Thales','Luiz Miguel','Henry','Marcos Vinicius','Kevin','Levi','Enrico','João Lucas','Hugo','Luiz Guilherme','Matheus Henrique');
$qNM = count($nomesM)-1;
$nomesF = array('Julia','Sophia','Isabella','Maria Eduarda','Manuela','Giovanna','Alice','Laura','Luiza','Beatriz','Mariana','Yasmin','Gabriela','Rafaela','Maria Clara','Maria Luiza','Ana Clara','Isabelle','Lara','Ana Luiza','Letícia','Ana Julia','Valentina','Nicole','Sarah','Vitória','Isadora','Lívia','Helena','Ana Beatriz','Lorena','Clara','Larissa','Emanuelly','Heloisa','Marina','Melissa','Gabrielly','Eduarda','Maria Fernanda','Rebeca','Amanda','Alícia','Bianca','Lavínia','Fernanda','Ester','Carolina','Emily','Cecília','Maria Júlia','Pietra','Ana Carolina','Milena','Marcela','Laís','Natália','Maria','Bruna','Camila','Luana','Ana Laura','Catarina','Maria Vitória','Maria Alice','Olivia','Agatha','Mirella','Sophie','Stella','Stefany','Isabel','Kamilly','Elisa','Luna','Eloá','Joana','Mariane','Bárbara','Juliana','Rayssa','Alana','Ana Sophia','Ana Lívia','Caroline','Brenda','Evelyn','Débora','Raquel','Maitê','Ana','Nina','Maria Sophia','Maria Cecília','Hadassa','Antonella','Jennifer','Betina','Mariah','Sabrina');
$qNF = count($nomesF)-1;
$sobrenomes = array('Silva','Santos','Oliveira','Souza','Pereira','Costela','Carvalho','Almeida','Ferreira','Ribeiro','Rodrigues','Gomes','Lima','Martins','Rocha','Alves','Araújo','Pinto','Barbosa','Castro','Fernandes','Melo','Azevedo','Barros','Cardoso','Correia','Cunha','Dias');
$qSN = count($sobrenomes)-1;
$sexo   = array('masculino','feminino');
$cidades = array('Americana','Artur Nogueira','Campinas','Cosmópolis','Engenheiro Coelho','Holambra','Hortolândia','Indaiatuba','Itatiba','Jaguariúna','Monte Mor','Nova Odessa','Paulínia','Pedreira',"Santa Bárbara d\'Oeste",'Santo Antônio de Posse','Sumaré','Valinhos','Vinhedo');
$qC = count($cidades)-1;
$enderecos = array('Av. Vereador Abel Ferreira','Av. Prof. Abraão de Morais','Av. Angélica','Av. Dr. Enéas Carvalho de Aguiar','Av. Professor Luiz Ignácio Anhaia Mello','Av. Aricanduva','Av. Engenheiro Armando de Arruda Pereira','Av. Doutor Eduardo Cotching','Av. João XXIII','Av. Morumbi','Av. Pompeia','Av. Regente Feijó','Av. Renata','Av. dos Bandeirantes','Av. Brasil (São Paulo)','Av. Braz Leme','Av. Brigadeiro Luís Antônio','Av. Celso Garcia','Av. Cidade Jardim','Corredor Norte-Sul','Av. Cruzeiro do Sul','Av. Cupecê','Av. Doutor Arnaldo','Av. Doutor Ricardo Jafet','Av. Engenheiro Caetano Álvares','E (continuação)','Av. do Estado','Av. Europa (São Paulo)','Av. Brigadeiro Faria Lima','Av. Professor Francisco Morato','Av. Giovanni Gronchi','Av. Guapira','Av. Hélio Pellegrino','Av. Higienópolis','Av. Inajar de Souza','Av. Interlagos','Av. Ipiranga','Estrada de Itapecerica','Av. Itaquera','Complexo Viário Jacu Pêssego','Av. Doutor João Guimarães','Av. Jornalista Roberto Marinho','Av. das Juntas Provisórias','Av. Juscelino Kubitschek','Ligação Leste-Oeste','Av. da Liberdade (São Paulo)','Av. Engenheiro Luís Carlos Berrini','Av. Luiz Dumont Villares','Marginal Pinheiros','Marginal Tietê','Av. Marquês de São Vicente','M (continuação)','Av. Mutinga','Av. Nova Cantareira','Av. 9 de Julho','Av. do Oratório','Av. Pais de Barros','Av. Prestes Maia','Radial Leste','Av. Rebouças','Av. Rio Branco (São Paulo)','Av. Robert Kennedy','Av. Rubem Berta','Av. Salim Farah Maluf','Av. Santa Marina','Av. Santo Amaro','Av. Santos Dumont (São Paulo)','Av. São João','Av. Sapopemba','Av. Senador Teotônio Vilela','Av. Sumaré','Av. Tiradentes','Av. Marechal Tito','Av. 23 de Maio','Av. Waldemar Carlos Pereira','Av. Washington Luís','R. Sete de Abril (São Paulo)','R. Alfredo Pujol','R. Amaral Gama','R. Augusta (São Paulo)','R. Augusto Tolle','R. Capitão Manuel Novaes','R. Cardeal Arcoverde','R. Conselheiro Furtado','R. Conselheiro Moreira de Barros','R. Conselheiro Saraiva','R. da Consolação','R. Doutor Antônio Bento','R. Doutor César','R. Estados Unidos','R. Francisca Júlia','R. Frei Caneca (São Paulo)','R. Galvão Bueno','R. Haddock Lobo (São Paulo)','R. Heitor Penteado','R. Iguatemi','Estrada Turística do Jaraguá','R. João Cachoeira','Al. Joaquim Eugênio de Lima','R. José Paulino','R. Leite de Morais','R. Líbero Badaró','R. Maria Antônia','R. da Mooca','R. Normandia','R. Oscar Freire','R. do Ouvidor (São Paulo)','R. Padre João Manuel','R. Paulistânia','R. Pedro Doll','R. Pedroso Alvarenga','R. Peixoto Gomide','Ladeira Porto Geral','R. 15 de Novembro (São Paulo)','Al. Ministro Rocha Azevedo','R. Barão de Itapetininga','R. Bela Cintra (São Paulo)','R. Conde de Sarzedas','R. Direita (São Paulo)','R. do Orfanato','R. da Quitanda (São Paulo)','R. São Bento','R. Três Rios','R. Santa Ifigênia','Al. Santos','R. São Carlos do Pinhal','R. Teodoro Sampaio','R. Tuiuti','R. Turiaçu','R. Vergueiro','R. 25 de Março','R. Voluntários da Pátria');
$qE = count($enderecos)-1;
$bairros = array('Bosque','Botafogo','Cambuí','Centro','Vl. Itapura','Bonfim','Campo dos Amarais','Guanabara','Jd. IV Centenário','Jd. Aurélia','Jd. Bandeirantes','Jd. Campineiro','Jd. Chapadão','Jd. Eulina','Jd. Interlagos','Jd. Magnólia','Jd. Miranda','Jd. Pacaembu','Jd. Santa Mônica','Jd. São Marcos','Jd. do Vovô','Pq. das Flores','Pq. Cidade de Campinas','Pq. Fazendinha','Pq. Santa Bárbara','Pq. São Jorge','Pq. das Universidades','Pq. Via Norte','Residencial Pq. Bandeirantes','Vl. Aurocan','Vl. Boa Vista','Vl. Nova','Vl. Olímpia','Vl. Proost de Sousa','Vl. Rossi e Siqueira','Vl. São Bento','Vl. San Martin','Alphaville','Bananal','Carlos Gomes','Chácara da Barra','Chácara Gargantilha','Chácara Primavera','Gramado','Jd. Bela Vista','Jd. Belo Horizonte','Jd. Boa Esperança','Jd. Bom Retiro','Jd. Campinas','Jd. Conceição','Jd. Dom Bosco','Jd. Flamboyant','Jd. Itamarati','Jd. Madalena','Jd. Míriam','Jd. Monte Belo I','Jd. Monte Belo II','Jd. Nilópolis','Jd. Novo Taquaral','Jd. Nossa Senhora Auxiliadora','Jd. das Paineiras','Jd. das Palmeiras','Jd. Paraíso','Jd. Professora Tarcilla','Jd. Santana','Jd. Santa Cândida','Jd. Santa Genebra','Jd. Santa Marcelina','Jd. São Carlos','Jd. São Rafael','Mansões Santo Antônio','Notre Dame','Nova Campinas','Pq. Alto Taquaral','Pq. Brasília','Pq. da Hípica','Pq. dos Pomares','Pq. Imperador','Pq. São Quirino','Pq. Taquaral','Recanto dos Dourados','Residencial Shangrilá','Taquaral','Vl. Brandina','Vl. 31 de Março','Vl. Costa e Silva','Vl. Gênesis','Vl. Iza','Vl. Miguel Vicente Cury','Vl. Nogueira','Cidade Jd.','Fundação da Casa Popular','Jd. Amazonas','Jd. das Andorinhas','Jd. Baronesa','Jd. Campo Belo I','Jd. Campo Belo II','Jd. Carlos Lourenço','Jd. Esmeraldina','Jd. Estoril','Jd. Fernanda I','Jd. Fernanda II','Jd. Icaraí','Jd. Irmãos Sigrist','Jd. Itaiú','Jd. Itatiaia','Jd. do Lago I','Jd. do Lago II','Jd. Leonor','Jd. Marisa','Jd. New York','Jd. Nova América','Jd. Nova Mercedes','Jd. Nova Europa','Jd. Novo São José','Jd. Ouro Branco','Jd. Nossa Senhora de Lourdes','Jd. das Oliveiras','Jd. Paranapanema','Jd. Paulistano','Jd. Planalto','Jd. Primavera','Jd. Proença','Jd. Samambaia','Jd. Santa Cruz','Jd. Santa Eudóxia','Jd. Santa Odila','Jd. São Domingos','Jd. São Fernando','Jd. São Gabriel','Jd. São José','Jd. São Pedro','Jd. São Vicente','Jd. Tamoio','Jd. do Trevo','Jd. Von Zuben','Pq. Camélias','Pq. dos Cisnes','Pq. Eldorado','Pq. da Figueira','Pq. Jambeiro','Pq. Industrial','Pq. Prado','Pq. São Martinho','Ponte Preta','São Bernardo','Swift','Vl. Campos Sales','Vl. Georgina','Vl. Formosa','Vl. IAPI','Vl. Industrial','Vl. Ipê','Vl. Joaquim Inácio','Vl. Lemos','Vl. Mimosa','Vl. Marta','Vl. Marieta','Vl. Nova São José','Vl. Orozimbo Maia','Vl. Palmeiras','Vl. Pompeia','Vl. Rica','Vl. Santana','Vl. Teixeira','[editar]e. Região Noroeste','','A Região Noroeste ocupa a região entre as rodovias SP-101 (a sul) e SP-348 (a oeste), com bairros mais antigos e engloba a Região do Campo Grande. Nessa região concentram-se também grandes registros de investimentos governamentais, como a ligação da rodovia SP-101 até a Avenida John Boyd Dunlop. Parte dos bairros, principalmente os localizados na região do Campo Grande e do Itajaí, são conhecidos pela grande autonomia, uma vez que se situam afastados do Centro (mais de 15 km - do centro da cidade). Nessa região existem majoritariamente famílias de classe baixa renda, e com altos índices de criminalidade.','Chácaras Cruzeiro do Sul','Cidade Satélite Íris','Cidade Satélite Íris II','Cidade Satélite Íris III','Jd. Bassoli','Jd. Campina Grande','Jd. Florence','Jd. Garcia','Jd. Liliza','Jd. Lisa','Jd. Londres','Jd. Maracanã','Jd. Nova Esperança','Jd. Novo Maracanã','Jd. Rossin','Jd. Santa Clara','Jd. Santa Rosa','Jd. São Judas Tadeu','Pq. Floresta','Pq. Itajaí','Pq. São Bento','Pq. Valença I','Pq. Valença II','Residencial Cosmos','Residencial Novo Mundo','Residencial Colina das Nascentes','Residencial São Luís','Vl. Castelo Branco','Vl. Padre Manuel da Nóbrega','[editar]f. Região Sudoeste','','A Região Sudoeste é a região de periferia com a maior concentração populacional da cidade, sobretudo por familias imigrantes em maioria vindas do nordeste do país. Devido ao seu contingente populacional, forma as conhecidas regiões tais como a do Ouro Verde, do Aeroporto de Viracopos e dos DICs que já chegaram a ser discutidas pela autonomia como distritos. Muitos bairros são caracterizados por construções precárias e favelas. Como iniciativa governamental, houve implantações da Rodoviária, vários Conjuntos Habitacionais Populares, Hospital e postos de saúde e até um Shopping Center. Nela também se localiza o Distrito Industrial. É a região com maior índice de criminalidade da cidade, como roubos/furtos, trafico de drogas e zona de prostituição da cidade (Jd. Itatinga).','Cidade Singer','Conjunto Mauro Marcondes','Conjunto Residencial Sousa Queirós','Distrito Industrial','DIC I (Monsenhor Luís Fernando Abreu)','DIC II (Doutor Antônio Mendonça de Barros)','DIC III (Rui Novais)','DIC IV (Lech Walesa)','DIC V (Chico Mendes)','DIC VI (Santo Dias da Silva)','Jd. Ademar de Barros','Jd. Aeronave','Jd. Aeroporto','Jd. Aires da Costa','Jd. Amoreiras','Jd. Capivari','Jd. Campos Elíseos','Jd. Cristina','Jd. Esplanada','Jd. Ipaussurama','Jd. Ipiranga','Jd. Itatinga','Jd. Marajó','Jd. Maria Rosa','Jd. Melina','Jd. Mercedes','Jd. Morumbi','Jd. Novo Campos Elíseos','Jd. Pauliceia','Jd. Ouro Verde','Jd. Planalto de Viracopos','Jd. Paraíso de Viracopos','Jd. Petrópolis','Jd. Roseira','Jd. Rosalina','Jd. Santa Lúcia','Jd. Santa Rita de Cássia','Jd. Santa Terezinha','Jd. São Cristóvão','Jd. São João','Jd. Shangai','Jd. Yeda','Núcleo Residencial Vl. Vitória','Pq. Dom Pedro','Pq. das Indústrias','Pq. Montreal','Pq. Tropical','Pq. Universitário de Viracopos','Pq. Vista Alegre','Residencial São José','Vl. Aeroporto','Vl. Mingone','Vl. Perseu Leite de Barros','Vida Nova','Vl. União','[editar]g. Distrito de Barão Geraldo','','O distrito de Barão Geraldo, localizado a aproximadamente 10 km do Centro de Campinas, é conhecido pela grande concentração comercial e de serviços, para atender aos numerosos bairros da região, alguns de classe alta (bairros abertos, bolsões residenciais e condomínios fechados), outros de classe média e de classe baixa e por causa da grande concentração de estudantes da UNICAMP, ali localizada.','Bosque de Barão Geraldo','Bosque das Palmeiras','Chácara Belvedere','Chácara Santa Margarida (também conhecido por Guará)','Chácaras Leandro (barão geraldo)','Cidade Universitária','Jd. Afife','Jd. Alto da Cidade Universitária','Jd. América','Jd. Independência','Jd. José Martins','Jd. Santa Genebra','Jd. São Gonçalo','Jd. do Sol','Loteamento Center Santa Genebra','Pq. Ceasa','Pq. das Universidades','Pq. Residencial Burato','Pq. Rio das Pedras','Real Pq.','Residencial Terra Nova','Vale das Garças','Vl. José Martins','Vl. Modesto Fernandes','Vl. Santa Luísa','Vl. Santa Isabel','Vl. São João','Vl. São José','Village Campinas','Bairro Boa Vista','Bairro Mendonça','Bairro Nova Aparecida','Bairro Rural do Pari','Bairro San Martin','CDHU Campinas F','CDHU Edivaldo Orsi','Chácaras Anhanguera','Chácaras Boa Vista','Chácaras Três Marias','Jd. Mirassol','Jd. Rosália I','Jd. Rosália II','Núcleo Residencial Beira Rio','Núcleo Residencial Padre Josimo','Núcleo Residencial Renascença','Núcleo Residencial Rosália IV','Núcleo Residencial São Luiz','Núcleo Residencial Sete de Setembro','Núcleo Residencial Vl. Francisca','Pq. Cidade de Campinas','Pq. Família','Pq. Maria Helena','Pq. Pinheiros','Terminal Intermodal de Cargas (TIC)','Vl. Olímpia','Vl. Padre Anchieta','Vl. Penteado','Vl. Réggio','Caminhos de San Conrado','Colinas do Ermitage','Imperial Pq.','Jd. Atibaia','Jd. Belmonte','Jd. Botânico','Jd. Conceição','Jd. Martinelli','Jd. Sorirama','Nova Sousas','Pq. Jatibaia','Sousas','Vl. Bourbon','Vl. Santana','Joaquim Egídio','Morada das Nascentes');
$qB = count($bairros)-1;
$estados = array('AC','AL','AP','AM','BA','CE','DF','ES','GO','MA','MT','MS','MG','PA','PB','PR','PE','PI','RJ','RN','RS','RO','RR','SC','SP','SE','TO');
$qUF = 27-1;
$texto = array('Aliquam in ante sem. Fusce luctus neque et elit vestibulum accumsan tincidunt orci varius. Ut malesuada tempor pretium. Nam convallis libero nec justo venenatis at posuere mauris suscipit. Morbi mi ante, sagittis in convallis a, blandit fringilla ipsum. Nunc aliquam massa vitae enim adipiscing egestas. Duis porta nisi sed ipsum vehicula facilisis ultricies nec turpis. Suspendisse a tortor id nisl gravida accumsan. Pellentesque faucibus cursus est sed venenatis. Aliquam erat volutpat.','Quisque accumsan ultrices eleifend. Pellentesque lacus massa, tincidunt a vehicula convallis, tristique id justo. Praesent sed diam ac arcu interdum porttitor at consectetur risus. Donec arcu mauris, ullamcorper in pulvinar hendrerit, placerat ultricies est. In hac habitasse platea dictumst. Fusce luctus viverra leo a sagittis. Praesent et commodo orci. Morbi ac est eget neque pellentesque molestie. Proin lobortis venenatis sem mattis suscipit. Nulla non turpis nec ante porttitor accumsan. Morbi non quam ut mi pretium tincidunt. Phasellus blandit pretium posuere. Donec quis faucibus massa.','Proin ut eros eu odio luctus aliquet non vel mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam velit lorem, viverra id dictum sed, fermentum et lorem. Duis quis massa massa. Curabitur sed mi vel nulla convallis mollis lacinia et est. Quisque posuere nulla in nisl iaculis commodo. Morbi non massa sapien. Nullam dapibus enim vitae dolor porttitor ut volutpat sem euismod. Praesent semper pulvinar eros, laoreet pretium arcu ullamcorper ac. Morbi est sem, aliquet vitae rutrum et, ultricies eget enim. Praesent congue hendrerit ipsum a pharetra. Quisque sit amet velit eu libero pretium fermentum. Integer sed eros lacus, ac fringilla tellus. Duis fringilla urna in sapien euismod quis condimentum orci convallis. Duis consectetur, nibh nec tincidunt hendrerit, dolor neque placerat est, eu porta nisi urna nec ipsum.','Fusce ac urna eget lectus euismod bibendum. Nulla at quam nisi. Fusce sed lacus sapien, eu lacinia nulla. Nam malesuada blandit nulla eget ullamcorper. Proin eu lorem at eros bibendum dignissim in quis metus. In eget turpis ante. Aliquam placerat mollis mauris, at interdum mauris tempus in. Integer feugiat mollis dignissim.','Nam sit amet orci ipsum, id venenatis urna. Sed suscipit ipsum a magna eleifend eget tristique dui aliquam. Curabitur hendrerit quam vel sem mattis condimentum. In fringilla, arcu nec facilisis consequat, lacus leo vulputate ante, eu ultrices sapien elit id dui. Nunc et elit quis nisl vulputate suscipit at in metus. Vivamus purus purus, pulvinar auctor luctus sed, fringilla non massa. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris dolor diam, malesuada a porttitor sed, lacinia in mauris.','Duis aliquam orci eros. Sed imperdiet lobortis turpis, ut blandit sem dapibus nec. Proin accumsan mi vitae sapien consectetur sit amet blandit urna tempor. Vivamus euismod venenatis dolor, eget luctus lorem vulputate ac. Maecenas a risus et risus sagittis laoreet eu eu elit. Quisque vel nibh eget metus faucibus sollicitudin. Vivamus convallis lectus ac magna pharetra vitae pulvinar nibh aliquam. Integer nec mi id sem sollicitudin convallis. Nulla aliquam, enim fringilla auctor varius, purus nisi dignissim enim, sit amet consequat mi eros nec magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In hac habitasse platea dictumst. Praesent posuere ultricies eleifend. Aenean lobortis, justo eget fringilla sollicitudin, augue massa tincidunt sapien, vel adipiscing odio ante vel est.','Mauris auctor quam sit amet sapien convallis dictum. Vestibulum nec dui in lectus faucibus malesuada sed et tellus. Morbi ultricies vestibulum augue, quis iaculis odio ultrices in. Duis tempus tellus sed libero viverra tristique. Nam vulputate orci vitae nisl luctus dapibus. Proin et ultrices augue. Maecenas tincidunt molestie tellus quis faucibus. Maecenas gravida interdum felis, molestie hendrerit est aliquet at. Donec non lacus nunc.','Phasellus eu purus eget nisl ullamcorper pretium quis eget purus. Phasellus rhoncus sollicitudin nulla, ut rutrum lorem posuere quis. Sed eget cursus lacus. Sed dapibus tristique neque a dictum. Phasellus ultricies, risus ut gravida adipiscing, arcu orci adipiscing libero, eget blandit nibh quam quis elit. Duis ante orci, condimentum et sollicitudin vel, gravida in urna. In sit amet risus non tellus mattis eleifend sit amet at diam. Aliquam blandit lorem sit amet nisi sollicitudin porttitor.','Praesent nec arcu ac dui auctor iaculis. Aliquam enim erat, molestie eget tincidunt eget, egestas nec urna. Aliquam viverra justo quis justo pellentesque nec fermentum urna molestie. Quisque tristique cursus auctor. Aliquam sit amet tellus in erat posuere blandit. Nam bibendum turpis id felis vulputate accumsan. Aliquam euismod sapien varius tellus interdum vel placerat purus malesuada. Donec cursus sagittis sapien, at congue lacus faucibus et. Morbi porta varius tortor, sed convallis ante eleifend vel. Nulla vitae ante elit, quis elementum urna. Sed ac erat a urna dictum lobortis id eget ante.','Etiam varius quam sit amet eros facilisis eu mattis ligula congue. Nunc congue lorem at leo auctor id fermentum dui accumsan. Aliquam tempor tristique leo, mollis volutpat nunc ultrices eget. Pellentesque a commodo elit. Donec convallis mollis gravida. Ut adipiscing pulvinar dui id ultrices. Vivamus et iaculis purus. Maecenas dolor ipsum, gravida at varius eget, vehicula dictum metus.','In nec imperdiet tellus. Ut ut dolor mi. Vestibulum nec dolor at lorem vestibulum euismod vel bibendum sem. Vestibulum pharetra risus sed velit auctor iaculis. Praesent non risus ante. Vestibulum tincidunt purus et risus dapibus et rutrum justo euismod. Quisque iaculis, arcu sed rutrum placerat, mauris lorem venenatis metus, id pulvinar dui nibh in turpis. Ut accumsan, justo sodales dictum auctor, velit nisi tristique tortor, placerat tempor dolor nisi quis enim. Curabitur elit nunc, rutrum sit amet accumsan eget, auctor in est. Quisque non leo viverra orci ullamcorper sagittis.','Nulla placerat mattis neque, et pulvinar neque pellentesque ultrices. In massa nibh, luctus aliquam mollis nec, adipiscing non erat. Mauris faucibus, arcu at auctor rhoncus, orci purus interdum diam, ut mollis lorem urna id neque. Integer tincidunt euismod volutpat. Nulla ac leo sed mauris suscipit sagittis nec id magna. Suspendisse potenti. In turpis felis, posuere vitae ornare in, semper in nunc. Vivamus malesuada, massa non lobortis aliquet, tortor diam iaculis enim, sed tempor nibh ligula ut nulla. In hac habitasse platea dictumst. Curabitur nec est at lectus pulvinar fringilla. Fusce sodales diam et nisl tempor auctor. Sed gravida erat non justo placerat suscipit. Vivamus in ligula ultricies dolor dapibus posuere nec eget arcu.','Integer consectetur magna et est dignissim quis pharetra dolor blandit. Duis eget ligula a neque sodales scelerisque. Aliquam vestibulum nunc id felis lobortis commodo. Morbi dictum purus leo. Nullam dolor ligula, molestie eu pellentesque id, aliquet commodo dolor. Integer odio elit, pretium ac lacinia in, tempus non diam. Nullam at lacus velit. Nunc semper augue nisl, sed porttitor elit. Proin accumsan metus vitae est lobortis a euismod arcu varius. Morbi eleifend accumsan nunc, ornare aliquam arcu viverra vel. In vel nisi massa. Aenean fringilla consequat arcu vitae vulputate. Suspendisse convallis tempor ante eget elementum.','Donec mollis augue ut libero imperdiet dictum. Mauris elementum bibendum ligula quis interdum. Vivamus consequat nisi id magna dignissim vel dictum sapien rutrum. Nullam euismod placerat diam, a luctus erat tincidunt in. Phasellus mollis dictum venenatis. Maecenas dui enim, molestie interdum blandit vel, tincidunt sed sapien. Etiam id egestas erat. Vivamus adipiscing scelerisque purus, quis mollis dolor vulputate at. Proin enim arcu, volutpat sit amet mattis eget, convallis in turpis.','Proin a purus purus, auctor placerat tellus. Morbi id lacus sapien, ac fringilla arcu. Sed at cursus purus. Donec lacus lacus, interdum vitae pulvinar vitae, interdum eu velit. Aliquam mattis metus quis diam placerat vel vehicula nisl egestas. Proin pharetra consequat massa, ac semper mauris vulputate sed. Praesent non augue nunc. Vestibulum at lorem nec quam porta venenatis ac ut sapien. Quisque laoreet semper tincidunt. Nam et elit justo. Donec eget dolor mi, vehicula imperdiet lacus.','Donec blandit orci non magna dapibus commodo tincidunt quam facilisis. Vestibulum in quam sit amet mauris aliquet vestibulum sit amet vel mauris. Donec sollicitudin consectetur fermentum. Ut porta semper enim, ac blandit dui luctus vitae. Vestibulum a magna ante, ut volutpat ipsum. Mauris pharetra porttitor nisi, vitae tincidunt risus sagittis at. Suspendisse potenti. Etiam vel ligula nunc, quis ullamcorper eros. Ut commodo, augue vitae vestibulum mattis, nisl turpis adipiscing nisi, ac porta diam eros in nulla. In scelerisque facilisis lectus, ac porta metus rhoncus sit amet.','Proin luctus rhoncus egestas. Vestibulum euismod, erat in cursus ullamcorper, velit tellus elementum turpis, sed cursus mauris orci non augue. Maecenas ut dui nec arcu vulputate pharetra a in odio. Praesent gravida velit nec enim consectetur cursus vitae hendrerit leo. Phasellus nulla sem, congue at condimentum sit amet, suscipit scelerisque mi. Aliquam tincidunt urna in nunc aliquam blandit. Nunc posuere vestibulum pellentesque. Sed molestie hendrerit aliquet. Ut egestas adipiscing ornare. Aliquam mollis pellentesque tempus. Praesent rhoncus, lectus sed ultricies dignissim, justo magna iaculis neque, eget ultrices mauris erat non felis. In hac habitasse platea dictumst. Phasellus consequat nibh et justo pulvinar sed ornare risus tincidunt.','Sed sem sem, commodo ut porta a, pulvinar nec risus. In hac habitasse platea dictumst. Aliquam vel pharetra augue. Nulla ac lectus fermentum elit posuere mollis. Etiam lacinia, magna sed euismod interdum, tortor neque iaculis ipsum, commodo euismod augue sem sit amet ligula. In hac habitasse platea dictumst. In in purus est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque venenatis facilisis augue vitae egestas. Quisque nunc nulla, hendrerit sed consectetur commodo, commodo vel ante.','Proin molestie iaculis tellus, at varius ipsum mollis quis. Integer eget metus sit amet enim volutpat fermentum. Morbi vitae neque lectus, at pretium quam. Morbi quis dui risus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus tristique cursus imperdiet. Donec volutpat lobortis mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent ultricies magna at urna vulputate volutpat sit amet ultricies risus. Donec iaculis quam vitae nibh ultricies ut molestie risus lobortis. Suspendisse potenti. Aenean placerat convallis mattis. Sed placerat faucibus est euismod laoreet.','Cras placerat neque ac dui commodo vel consequat erat faucibus. Nulla eu elit nunc, vitae vehicula elit. In blandit tincidunt ultrices. Nam quis metus id orci luctus semper non sed elit. Aliquam laoreet interdum imperdiet. Curabitur accumsan, libero et congue placerat, nisi leo tempor lacus, vitae egestas nisl lectus vitae dolor. Aliquam blandit lectus ac lorem condimentum scelerisque vel at nunc. Sed justo justo, interdum non ultrices a, consequat eu massa. Suspendisse ut odio ut massa vestibulum convallis. Duis vel augue non nisl porta volutpat. Proin vel orci non ante sollicitudin rutrum ut id magna.','Duis malesuada vulputate consequat. Proin condimentum placerat diam iaculis porta. Cras faucibus elementum interdum. Integer at tellus orci. Nunc porta diam sit amet erat scelerisque et varius ligula consequat. Vestibulum tincidunt erat quis justo condimentum quis suscipit odio semper. Vestibulum mi elit, malesuada et laoreet at, interdum nec mauris. Mauris quis euismod mauris. In facilisis, odio ac vulputate bibendum, orci odio hendrerit augue, vulputate mollis diam justo non turpis. Phasellus convallis, ante a condimentum mollis, justo justo lacinia urna, et dictum nisi dui non est. Morbi suscipit est in augue ullamcorper ultricies.','Maecenas eget porta nibh. Aliquam fermentum eros et lectus ullamcorper dignissim eu ut magna. Nunc tellus neque, posuere nec aliquet ut, ullamcorper at odio. Sed scelerisque ligula ac orci mattis dapibus. Sed venenatis, turpis ornare congue hendrerit, lorem mi pulvinar quam, vel dictum sem purus nec sem. Pellentesque mollis placerat dolor, nec commodo urna rutrum a. Praesent scelerisque magna vitae lorem tincidunt ac egestas massa egestas. Praesent lorem magna, laoreet id tincidunt sed, fringilla non lorem. Suspendisse augue mauris, consectetur eget ornare eget, gravida et quam. Curabitur accumsan quam quis felis dictum laoreet sollicitudin erat ullamcorper. Phasellus sed turpis et metus luctus tempor sit amet vel massa. Ut gravida dictum consequat. Quisque sed nulla in magna molestie elementum vitae at dolor. Praesent turpis enim, varius non consectetur eu, imperdiet vel nibh. Proin vitae erat diam, eget hendrerit risus.','Quisque eu magna sem, ut hendrerit diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed a volutpat velit. Aliquam lorem neque, congue quis tristique eget, imperdiet ut sapien. Morbi vel massa eros, ut ultricies tortor. Quisque posuere faucibus mi eget vestibulum. Suspendisse faucibus ante a nunc semper auctor. Nam et euismod lorem. Integer vulputate enim sit amet metus bibendum eu tempor felis fringilla. Aliquam elementum nulla eget tellus iaculis luctus. Quisque cursus purus egestas leo laoreet eget aliquam dui ornare. Sed eu lectus sed sem interdum volutpat. Donec non libero sed augue tincidunt faucibus eu non nibh. Donec tempus ante et quam iaculis blandit. Aliquam dui arcu, venenatis eget blandit ac, viverra eget leo.','Suspendisse potenti. Maecenas ultrices tempus purus vel mollis. Aliquam erat volutpat. Duis iaculis, dui a mollis interdum, arcu mi consectetur orci, nec elementum lectus diam sit amet dui. In at justo mi, in pellentesque eros. In hac habitasse platea dictumst. Suspendisse eu justo nulla. In ante dui, condimentum eget elementum in, pretium sit amet nisl.','Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam porttitor convallis adipiscing. Cras tincidunt tincidunt turpis, vel elementum nibh elementum eget. Mauris quis ultricies velit. Praesent id libero ante, quis viverra risus. Etiam dictum, ante vel varius auctor, neque elit gravida quam, id mollis mauris augue sed lectus. Fusce tempus, orci eu lacinia viverra, est turpis condimentum sapien, ut luctus nibh leo id sem. Nulla sodales, eros eget porttitor consequat, justo odio blandit orci, eget imperdiet arcu urna vulputate tortor. Aliquam malesuada sapien mi. Proin quis lorem lacus, sed tempus tellus. Etiam cursus rutrum nunc, sed mollis urna auctor ac. Donec urna ante, tincidunt sit amet vehicula ut, facilisis quis mi. Nulla enim leo, lobortis quis facilisis id, pharetra vitae ligula.','Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed vel odio id augue ultrices faucibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin varius velit nec augue rhoncus in sodales arcu tempus. Pellentesque ut lacus neque, sed blandit eros. Suspendisse potenti. Duis elit sem, imperdiet et lobortis vitae, rhoncus id mauris.','Duis id nisl enim. Sed ante risus, sodales sit amet vestibulum posuere, tincidunt eget elit. Nullam mi odio, hendrerit vel iaculis eget, sollicitudin vitae tortor. Suspendisse sapien lorem, tincidunt sed tincidunt et, mattis eu dui. Cras non tempor nisi. Mauris ante quam, mollis ac faucibus vitae, vehicula vitae tellus. Suspendisse potenti. In semper rhoncus turpis sed aliquam. Fusce imperdiet, justo ac sollicitudin fermentum, quam orci tristique lorem, a accumsan urna nisi ut orci. Sed tincidunt, lectus ut lacinia malesuada, felis quam interdum lorem, sed posuere metus ante quis lacus. Quisque ullamcorper, eros at dapibus mattis, elit massa gravida nisl, ac feugiat dui risus ac nulla. Praesent vitae tortor et nunc congue vehicula.','Quisque erat ipsum, suscipit bibendum vehicula malesuada, semper lacinia velit. Vivamus purus diam, venenatis pretium sagittis at, pulvinar et nisi. Nulla posuere mauris sed neque posuere in dignissim nibh pulvinar. Nunc eu augue elit. Nulla sit amet feugiat lorem. Integer turpis risus, porta et lacinia ac, tempor sit amet ligula. Pellentesque molestie sagittis quam, eget aliquam lectus euismod ut. Sed sed dolor risus, a ultricies tellus. Sed a tellus arcu. Aliquam diam diam, molestie id porttitor eget, vestibulum at lorem. Morbi ac semper odio. Aenean ac odio lacus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.','Nulla pharetra odio in dolor varius eu fringilla ante hendrerit. Cras rhoncus pharetra ante, non imperdiet augue suscipit eu. Vivamus vestibulum gravida dignissim. Ut a felis placerat diam fermentum luctus. Donec est diam, lacinia ac posuere nec, condimentum vitae nunc. Aliquam non mauris mauris. Cras ac congue ante. Fusce tincidunt quam viverra mauris aliquam bibendum suscipit nunc aliquet.','Maecenas nunc orci, cursus id eleifend non, rutrum quis augue. Sed mauris lorem, eleifend et consequat et, cursus porttitor mi. Fusce vel ipsum ipsum. Quisque id risus turpis. In hac habitasse platea dictumst. In vel tellus lacus. Vestibulum non lectus metus, vel iaculis ligula. Nulla mi ante, euismod sed volutpat id, ultricies a velit. Cras in urna at sapien eleifend facilisis. In libero metus, vehicula at sagittis eu, sagittis sit amet augue. Sed dapibus porta eros at facilisis. In hac habitasse platea dictumst. Nullam tortor turpis, adipiscing in suscipit eget, posuere ac lacus. In malesuada eleifend quam vitae venenatis.');
$qT = count($texto)-1;
function nome(){
  global $nomesM, $qNM, $nomesF, $qNF,$sobrenomes,$qSN;
  if(rand(0,1))
    return nomeM();
  return nomeF();
}
function nomeM(){
  global $nomesM, $qNM, $sobrenomes,$qSN;
  return $nomesM[rand(0,$qNM)]." ".$sobrenomes[rand(0,$qSN)];
}
function nomeF(){
  global $nomesF, $qNF,$sobrenomes,$qSN;
  return $nomesF[rand(0,$qNF)]." ".$sobrenomes[rand(0,$qSN)];;
}
function endereco(){
  global $enderecos,$qE,$bairros,$qB;
  return $enderecos[rand(0,$qE)]." ".rand(1,2000)." - ".$bairros[rand(0,$qB)];
}
function cidade(){
  global $cidades,$qC,$estados,$qUF;
  return $cidades[rand(0,$qC)]." - ".$estados[rand(0,$qUF)];
}
function telefone(){
  return "(".rand(0,99).") ".rand(0,9999)."-".rand(0,9999);
}
function codigoAlfa(){
  return rand()%100000;
}
function dataSQL(){
  return rand(1960,date('Y'))."-".rand(1,12)."-".rand(0,28)." ".rand(0,23).":".rand(0,59).":".rand(0,59);
}
function mAvaliacao(){
  return (rand(0,1))?'capurro':'new_ballard';
}
function termo(){
  return rand(0,1)?'termo':'pre_termo';
}
function crescimento(){
  $rand = rand(0,2);
  switch($rand){
    case 0: return 'pig';
    case 1: return 'aig';
    case 2: return 'gig';
  }
}
function boolean(){
  return (rand(0,1))?'true':'false';
}
function tExame(){
  return (rand(0,1))?'peate-a':'eoat';
}
function eResultado(){
  return (rand(0,1))?'passou':'falhou';
}
function texto(){
  global $texto,$qT;
  return $texto[rand(0,$qT)];
}

function textoCurto(){
	global $texto,$qT;
	return substr($texto[rand(0,$qT)],0,250);
}
function textoProtese(){
	global $texto,$qT;
	return substr($texto[rand(0,$qT)],0,5);
}

function ssFamilia(){
	return (rand(0,1))?'adotiva':'legitima';
}
function ssUniao(){
	return (rand(0,1))?'consensual':'legal';
}
function ssCasaTipo(){
	$rand = rand(0,2);
	switch($rand){
	    case 0: return 'propria';
	    case 1: return 'alugada';
	    case 2: return 'cedida';
	  }
}
function nmR(){
	return (rand(0,1))?'audiometro_pediatrico':'campo_livre';
}
function reacaoSons(){
	return (rand(0,1))?'viva_voz':'voz_amplificada';
}
function guizosSons(){
	$rand = rand(0,6);
	switch($rand){
		case 0: return 'nao_reacao';
		case 1: return 'atencao_som';
		case 2: return 'ros_ll';
		case 3: return 'local_up';
		case 4: return 'local_down';
		case 5: return 'rcp';
		case 6: return 'startle';
	}
}
function latenciaResp(){
	return (rand(0,1))?'imediata':'lenta';
}
function movimentoCabeca(){
	return (rand(0,1))?'90':'menor_90';
}
function ppTipo(){
	$rand = rand(0,2);
	switch($rand){
		case 0: return 'od';
		case 1: return 'oe';
		case 2: return 'binaural';
	}
}


$c = new mysqli("localhost","saudeaud_fcm","Z,NgT@eBFOUU","saudeaud_fcm");
$c->query("SET NAMES 'utf8'");
$c->query("DELETE FROM protese_anexo");
$c->query("DELETE FROM protese_validacao");
$c->query("DELETE FROM protese_verificacao");
$c->query("DELETE FROM protese_prescricao");
$c->query("DELETE FROM protese_avaliacao");
$c->query("DELETE FROM servico_social");
$c->query("DELETE FROM triagem");
$c->query("DELETE FROM genetica");
$c->query("DELETE FROM paciente");

$sql = "INSERT INTO paciente (id,nome,hc,nome_mae,hc_mae,data_nascimento,sexo,endereco,cidade,telefone_fixo,telefone_movel,telefone_trabalho,last_update) VALUES ";
for($i = 0; $i<50; $i++){
  if($i%2){
    $nome = nomeF();
    $sexo = 'feminino';
  }else{
    $nome = nomeM();
    $sexo = 'masculino';
  }
  
  $sql .= "\n('".($i+1)."','".$nome."','".codigoAlfa()."','".nomeF()."','".codigoAlfa()."','".dataSQL()."','".$sexo."','".endereco()."','".cidade()."','".telefone()."','".telefone()."','".telefone()."','".dataSQL()."')";
  if($i < 49) $sql .= ",";
}
$c->query($sql);

$sql = "INSERT INTO triagem VALUES ";
for($i = 0; $i < 50; $i++){
  $sql .="('".($i+1)."','".rand(1800,3800)."','".rand(10,100)."','".rand(10,100)."','".rand(10,100)."','".rand(10,100)."','".rand(30,40)."','".rand(0,28)."','".mAvaliacao()."','".rand(10,100)."','".termo()."','".crescimento()."','".tExame()."','".eResultado()."','".eResultado()."','".texto()."','".dataSQL()."','".dataSQL()."','". ($i+1) ."')";
  if($i < 49) $sql .= ",";
}

$c->query($sql);

$sql = "INSERT INTO genetica VALUES ";
for($i = 0; $i < 50; $i++){
  $sql .="('".($i+1)."','".texto()."','".texto()."','".texto()."','".texto()."','".boolean()."','".boolean()."','".boolean()."','".boolean()."','".boolean()."','".boolean()."','".boolean()."','".boolean()."','".boolean()."','".boolean()."','".boolean()."','".boolean()."','".boolean()."','".boolean()."','".boolean()."','".texto()."','".boolean()."','".texto()."','".boolean()."','".texto()."','".boolean()."','".texto()."','".boolean()."','".texto()."','".boolean()."','".texto()."','".texto()."','".texto()."','".dataSQL()."',".($i+1).")";
  if($i < 49) $sql .= ",";
}

$c->query($sql);

$sql = "INSERT INTO servico_social VALUES";
for($i = 0; $i < 50; $i++){
	
	$sql .="('".($i+1)."','".nomeF()."','".dataSQL()."','".texto()."','".texto()."','".texto()."','".telefone()."','".nomeM()."','".dataSQL()."','".texto()."','".texto()."','".texto()."','".telefone()."','".nomeF()."','".ssFamilia()."','".texto()."','".ssUniao()."','".texto()."','".boolean()."','".rand(500,2000)."','".texto()."','".rand(2,6)."','".rand(500,1500)."','".texto()."','".texto()."','".ssCasaTipo()."','".texto()."','".texto()."','".texto()."','".rand(1,8)."','".texto()."','".texto()."','".texto()."','".texto()."','".dataSQL()."',".($i+1).")";
	if($i < 49) $sql .= ",";
}

$c->query($sql);


$sql = "INSERT INTO protese_avaliacao VALUES";
for($i = 0; $i < 50; $i++){

	$sql .="('".($i+1)."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".nmR()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".reacaoSons()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".guizosSons()."','".guizosSons()."','".guizosSons()."','".guizosSons()."','".guizosSons()."','".guizosSons()."','".guizosSons()."','".guizosSons()."','".guizosSons()."','".latenciaResp()."','".movimentoCabeca()."','".textoCurto()."','".dataSQL()."',".($i+1).")";
	if($i < 49) $sql .= ",";
}

$c->query($sql);

$sql = "INSERT INTO protese_prescricao VALUES";
for($i = 0; $i < 50; $i++){

	$sql .="('".($i+1)."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".dataSQL()."','".ppTipo()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".dataSQL()."',".($i+1).")";
	if($i < 49) $sql .= ",";
}

$c->query($sql);

$sql = "INSERT INTO protese_verificacao VALUES";
for($i = 0; $i < 50; $i++){

	$sql .="('".($i+1)."','".dataSQL()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".nmR()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".reacaoSons()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".guizosSons()."','".guizosSons()."','".guizosSons()."','".guizosSons()."','".guizosSons()."','".guizosSons()."','".guizosSons()."','".guizosSons()."','".guizosSons()."','".latenciaResp()."','".movimentoCabeca()."','".dataSQL()."',".($i+1).")";
	if($i < 49) $sql .= ",";
}

$c->query($sql);

$sql = "INSERT INTO protese_validacao VALUES";
for($i = 0; $i < 50; $i++){

	$sql .="('".($i+1)."','".dataSQL()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".nmR()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".reacaoSons()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".textoProtese()."','".guizosSons()."','".guizosSons()."','".guizosSons()."','".guizosSons()."','".guizosSons()."','".guizosSons()."','".guizosSons()."','".guizosSons()."','".guizosSons()."','".latenciaResp()."','".movimentoCabeca()."','".textoCurto()."','".dataSQL()."',".($i+1).")";
	if($i < 49) $sql .= ",";
}

$c->query($sql);

$sql = "INSERT INTO protese_anexo VALUES";
for($i = 0; $i < 50; $i++){

	$sql .="('".($i+1)."','".textoCurto()."','".textoCurto()."','".textoCurto()."',".rand(0,4).",'".textoCurto()."','".textoCurto()."','".textoCurto()."','".textoCurto()."',".rand(0,4).",'".textoCurto()."',".rand(0,4).",'".textoCurto()."',".rand(0,4).",'".textoCurto()."',".rand(0,4).",'".textoCurto()."',".rand(0,4).",'".textoCurto()."',".rand(0,4).",'".textoCurto()."',".rand(0,4).",'".textoCurto()."',".rand(0,4).",'".textoCurto()."',".rand(0,4).",'".dataSQL()."',".($i+1).")";
	if($i < 49) $sql .= ",";
}

$c->query($sql);
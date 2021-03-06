<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            [
                'name' => 'O Rei Leão',
                'duration' => '01:29:00',
                'pegi_id' => '1',
                'trailer' => 'rHiHRhbTv-Q',
                'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81G5DqNT2SL.jpg',
                'release' => '2011',
                'tags' => 'Desenho, Infantil,  Rob Minkoff',
                'genre_id' => '1',
                'sinopse' => 'Simba, um leão herdeiro do trono, precisará enfrentar seu tio Scar e escapar de suas artimanhas para evitar perder seu posto como futuro rei.',
            ],
            [
                'name' => 'Viva - A Vida é uma Festa',
                'duration' => '01:45:00',
                'pegi_id' => '1',
                'trailer' => 'iLmZZV-Nkuk',
                'poster' => 'https://br.web.img3.acsta.net/pictures/17/12/07/11/33/0502209.jpg',
                'release' => '2018',
                'tags' => 'Desenho, Infantil, Musical, Adrian Molina, Lee Unkrich',
                'genre_id' => '1',
                'sinopse' => 'Em Viva - A Vida é uma Festa, Miguel é um menino de 12 anos que quer muito ser um músico famoso, mas ele precisa lidar com sua família que desaprova seu sonho. Determinado a virar o jogo, ele acaba desencadeando uma série de eventos ligados a um mistério de 100 anos. A aventura, com inspiração no feriado mexicano do Dia dos Mortos, acaba gerando uma extraordinária reunião familiar.',
            ],
            [
                'name' => 'Toy Story 3',
                'duration' => '01:40:00',
                'pegi_id' => '1',
                'trailer' => 'JcpWXaA2qeg',
                'poster' => 'https://uauposters.com.br/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/2/2/228120140608-uau-posters-filmes-infantis-animacao-toy-story-3-toy-story-3--9.jpg',
                'release' => '2010',
                'tags' => 'Desenho, Infantil, Buzz lightyear, Woody, PIXAR, Lee Unkrich',
                'genre_id' => '1',
                'sinopse' => 'Em Toy Story 3, Andy (John Morris) tem 17 anos e está prestes a ir para a faculdade. Desta forma, precisa arrumar o quarto e definir o que irá para o lixo e o que será guardado no sótão. Seus antigos brinquedos, entre eles Buzz Lightyear (Tim Allen), Jessie (Joan Cusack) e o Sr. Cabeça de Batata (Don Rickles), são separados para serem guardados no sótão. Entretanto, uma confusão faz com que a mãe de Andy os coloque no lixo. Woody (Tom Hanks), que será levado por Andy para a faculdade, decide salvá-los. O grupo escapa, mas acaba no carro da mãe de Andy. Ela leva a uma creche diversos brinquedos, entre eles Barbie (Jodi Benson). Ao chegarem, os amigos encontram um universo até então inimaginável, onde os brinquedos sempre têm crianças para brincarem com eles.',
            ],
            [
                'name' => 'A Bela e a Fera',
                'duration' => '01:27:00',
                'pegi_id' => '2',
                'trailer' => 'MZsYDpafGTY',
                'poster' => 'http://tinhaqueser.com/wp-content/uploads/2012/06/abelaeafera_01.jpg',
                'release' => '2012',
                'tags' => 'Desenho, Infantil, Bill Condon, Musical',
                'genre_id' => '1',
                'sinopse' => 'Em uma pequena aldeia da França vive Belle, uma jovem inteligente que é considerada estranha pelo moradores da localidade, e seu pai, Maurice, um inventor que é visto como um louco. Ela é cortejada por Gaston, que quer casar com ela. Mas apesar de todas as jovens do lugarejo o acharem um homem bonito, Belle não o suporta, pois vê nele uma pessoa primitiva e convencida. Quando o pai de Belle vai para uma feira demonstrar sua nova invenção, ele acaba se perdendo na floresta e é atacado por lobos. Desesperado, Maurice procura abrigo em um castelo, mas acaba se tornando prisioneiro da Fera, o senhor do castelo, que na verdade é um príncipe que foi amaldiçoado por uma feiticeira quando negou abrigo a ela. Quando Belle sente que algo aconteceu ao seu pai vai à sua procura. Ela chega ao castelo e lá faz um acordo com a Fera: se seu pai fosse libertado ela ficaria no castelo para sempre. A Fera concorda e todos os "moradores" do castelo, que lá vivem e também foram transformados em objetos falantes, sentem que esta pode ser a chance do feitiço ser quebrado. Mas isto só acontecerá se a Fera amar alguém e esta pessoa retribuir o seu amor, sendo que isto tem de ser rápido, pois quando a última pétala de uma rosa encantada cair o feitiço não poderá ser mais desfeito.',
            ],
            [
                'name' => 'O Senhor dos Anéis - O Retorno do Rei',
                'duration' => '03:21:00',
                'pegi_id' => '3',
                'trailer' => 'y2rYRu8UW8M',
                'poster' => 'https://br.web.img2.acsta.net/medias/nmedia/18/92/91/47/20224867.jpg',
                'release' => '2003',
                'tags' => 'Peter Jackson, Elijah Wood, Ian McKellen, Gandalf, Gollum, Hobbit',
                'genre_id' => '2',
                'sinopse' => 'Sauron planeja um grande ataque a Minas Tirith, capital de Gondor, o que faz com que Gandalf (Ian McKellen) e Pippin (Billy Boyd) partam para o local na intenção de ajudar a resistência. Um exército é reunido por Theoden (Bernard Hill) em Rohan, em mais uma tentativa de deter as forças de Sauron. Enquanto isso Frodo (Elijah Wood), Sam (Sean Astin) e Gollum (Andy Serkins) seguem sua viagem rumo à Montanha da Perdição, para destruir o Um Anel.',
            ],
            [
                'name' => 'Vingadores: Ultimato',
                'duration' => '03:00:00',
                'pegi_id' => '2',
                'trailer' => 'g6ng8iy-l0U',
                'poster' => 'https://lumiere-a.akamaihd.net/v1/images/690x0w_br_9e5801a5.jpeg?region=0%2C0%2C690%2C1035',
                'release' => '2019',
                'tags' => 'Homem de Ferro, Capitão America, Hulk, Homem aranha, Marvel',
                'genre_id' => '2',
                'sinopse' => 'Em Vingadores: Ultimato, após Thanos eliminar metade das criaturas vivas em Vingadores: Guerra Infinita, os heróis precisam lidar com a dor da perda de amigos e seus entes queridos. Com Tony Stark (Robert Downey Jr.) vagando perdido no espaço sem água nem comida, o Capitão América/Steve Rogers (Chris Evans) e a Viúva Negra/Natasha Romanov (Scarlett Johansson) precisam liderar a resistência contra o titã louco.',
            ],
            [
                'name' => 'De Volta para o Futuro',
                'duration' => '01:56:00',
                'pegi_id' => '1',
                'trailer' => 'qvsgGtivCgs',
                'poster' => 'https://br.web.img3.acsta.net/medias/nmedia/18/90/95/62/20122008.jpg',
                'release' => '1985',
                'tags' => 'Robert Zemeckis, Michael J. Fox, Christopher Lloyd',
                'genre_id' => '2',
                'sinopse' => 'Um jovem (Michael J. Fox) aciona acidentalmente uma máquina do tempo construída por um cientista (Christopher Lloyd) em um Delorean, retornando aos anos 50. Lá conhece sua mãe (Lea Thompson), antes ainda do casamento com seu pai, que fica apaixonada por ele. Tal paixão põe em risco sua própria existência, pois alteraria todo o futuro, forçando-o a servir de cupido entre seus pais.',
            ],
            [
                'name' => 'Star Wars: O Império Contra-ataca',
                'duration' => '02:04:00',
                'pegi_id' => '1',
                'trailer' => 'JNwNXF9Y6kY',
                'poster' => 'https://images-na.ssl-images-amazon.com/images/I/91eOgodm4nL.jpg',
                'release' => '1980',
                'tags' => 'Darh Vader, Luke Skywalker, George Lucas',
                'genre_id' => '2',
                'sinopse' => 'Em Star Wars: Episódio V, as forças imperais comandadas por Darth Vader (David Prowse/James Earl Jones) lançam um ataque contra os membros da resistência, que são obrigados a fugir. Enquanto isso, Luke Skywalker (Mark Hamill) tenta encontrar o Mestre Yoda, que poderá ensiná-lo a dominar a "Força" e torná-lo um cavaleiro Jedi. No entanto, Darth Vader planeja levá-lo para o Lado Negro da "Força".',
            ],
            [
                'name' => 'Batman - O Cavaleiro Das Trevas',
                'duration' => '02:32:00',
                'pegi_id' => '3',
                'trailer' => 'EXeTwQWrcwY',
                'poster' => 'https://i.pinimg.com/originals/18/06/68/180668a8cddc20f78bd05924a7411814.jpg',
                'release' => '2008',
                'tags' => 'Christopher Nolan, Christian Bale, Heath Ledger, Coringa',
                'genre_id' => '3',
                'sinopse' => 'Após dois anos desde o surgimento do Batman (Christian Bale), os criminosos de Gotham City têm muito o que temer. Com a ajuda do tenente James Gordon (Gary Oldman) e do promotor público Harvey Dent (Aaron Eckhart), Batman luta contra o crime organizado. Acuados com o combate, os chefes do crime aceitam a proposta feita pelo Coringa (Heath Ledger) e o contratam para combater o Homem-Morcego.',
            ],
            [
                'name' => 'Gladiador',
                'duration' => '02:35:00',
                'pegi_id' => '5',
                'trailer' => 'P5ieIbInFpg',
                'poster' => 'https://upload.wikimedia.org/wikipedia/pt/4/44/GladiadorPoster.jpg',
                'release' => '2000',
                'tags' => 'Russell Crowe, Ridley Scott, Joaquin Phoenix',
                'genre_id' => '3',
                'sinopse' => 'Nos dias finais do reinado de Marcus Aurelius (Richard Harris), o imperador desperta a ira de seu filho Commodus (Joaquin Phoenix) ao tornar pública sua predileção em deixar o trono para Maximus (Russell Crowe), o comandante do exército romano. Sedento pelo poder, Commodus mata seu pai, assume a coroa e ordena a morte de Maximus, que consegue fugir antes de ser pego e passa a se esconder sob a identidade de um escravo e gladiador do Império Romano.',
            ],
            [
                'name' => 'Logan',
                'duration' => '02:17:00',
                'pegi_id' => '5',
                'trailer' => 'KPND6SgkN7Q',
                'poster' => 'https://img.elo7.com.br/product/zoom/26772FF/big-poster-filme-marvel-logan-lo02-tamanho-90x60-cm-poster-de-filme.jpg',
                'release' => '2017',
                'tags' => 'Wolverine, X-men, Hugh Jackman',
                'genre_id' => '3',
                'sinopse' => 'Em 2029, Logan (Hugh Jackman) ganha a vida como chofer de limousine para cuidar do nonagenário Charles Xavier (Patrick Stewart). Debilitado fisicamente e esgotado emocionalmente, ele é procurado por Gabriela (Elizabeth Rodriguez), uma mexicana que precisa da ajuda do ex-X-Men para defender a pequena Laura Kinney / X-23 (Dafne Keen). Ao mesmo tempo em que se recusa a voltar à ativa, Logan é perseguido pelo mercenário Donald Pierce (Boyd Holbrook), interessado na menina.',
            ],
            [
                'name' => 'Bastardos Inglórios',
                'duration' => '02:33:00',
                'pegi_id' => '6',
                'trailer' => 'KnrRy6kSFF0',
                'poster' => 'https://br.web.img2.acsta.net/medias/nmedia/18/90/43/36/20096333.jpg',
                'release' => '2009',
                'tags' => 'Brad Pitt, Quentin Tarantino, Christoph Waltz, Michael Fassbender',
                'genre_id' => '3',
                'sinopse' => 'Em Bastardos Inglórios, na Segunda Guerra Mundial, a França está ocupada pelos nazistas. O tenente Aldo Raine (Brad Pitt) é o encarregado de reunir um pelotão de soldados de origem judaica, com o objetivo de realizar uma missão suicida contra os alemães. O objetivo é matar o maior número possível de nazistas, da forma mais cruel possível. Paralelamente Shosanna Dreyfuss (Mélanie Laurent) assiste a execução de sua família pelas mãos do coronel Hans Landa (Christoph Waltz), o que faz com que fuja para Paris. Lá ela se disfarça como operadora e dona de um cinema local, enquanto planeja um meio de se vingar.',
            ],
            [
                'name' => 'Forrest Gump',
                'duration' => '02:20:00',
                'pegi_id' => '4',
                'trailer' => 'bLvqoHBptjg',
                'poster' => 'https://cinegarimpo.com.br/wp/content/uploads/2009/11/cinegarimpo_forrest-gump-movie_poster.jpg',
                'release' => '1994',
                'tags' => 'Tom Hanks, Corre Forest, Robert Zemeckis',
                'genre_id' => '4',
                'sinopse' => 'Quarenta anos da história dos Estados Unidos, vistos pelos olhos de Forrest Gump (Tom Hanks), um rapaz com QI abaixo da média e boas intenções. Por obra do acaso, ele consegue participar de momentos cruciais, como a Guerra do Vietnã e Watergate, mas continua pensando no seu amor de infância, Jenny Curran.',
            ],
            [
                'name' => 'O auto da Compadecida',
                'duration' => '01:35:00',
                'pegi_id' => '2',
                'trailer' => 'XPuMu_ENzlg',
                'poster' => 'https://upload.wikimedia.org/wikipedia/pt/b/bf/O_auto_da_compadecida.jpg',
                'release' => '2000',
                'tags' => 'Brasileiro, Guel Arraes, Selton Mello',
                'genre_id' => '4',
                'sinopse' => 'As aventuras dos nordestinos João Grilo (Matheus Natchergaele), um sertanejo pobre e mentiroso, e Chicó (Selton Mello), o mais covarde dos homens. Ambos lutam pelo pão de cada dia e atravessam por vários episódios enganando a todos do pequeno vilarejo de Taperoá, no sertão da Paraíba. A salvação da dupla acontece com a aparição da Nossa Senhora (Fernanda Montenegro). Adaptação da obra de Ariano Suassuna.',
            ],
            [
                'name' => 'O Grande Ditador',
                'duration' => '02:05:00',
                'pegi_id' => '1',
                'trailer' => 'i1C6qZVeFtA',
                'poster' => 'https://br.web.img3.acsta.net/pictures/14/10/06/22/23/328151.jpg',
                'release' => '1940',
                'tags' => 'Charles Chaplin, Hitler, Preto e Branco',
                'genre_id' => '4',
                'sinopse' => 'Adenoid Hynkel (Charles Chaplin) assume o governo de Tomainia. Ele acredita em uma nação puramente ariana e passa a discriminar os judeus locais. Esta situação é desconhecida por um barbeiro judeu (Charles Chaplin), que está hospitalizado devido à participação em uma batalha na 1ª Guerra Mundial. Ele recebe alta, mesmo sofrendo de amnésia sobre o que aconteceu na guerra. Por ser judeu, passa a ser perseguido e precisa viver no gueto. Lá conhece a lavadora Hannah (Paulette Goddard), por quem se apaixona. A vida dos judeus é monitorizada pela guarda de Hynkel, que tem planos de dominar o mundo. Seu próximo passo é invadir Osterlich, um país vizinho, e para tanto negocia um acordo com Benzino Napaloni (Jack Oakie), ditador da Bacteria.',
            ],
            [
                'name' => 'Curtindo a Vida Adoidado',
                'duration' => '01:42:00',
                'pegi_id' => '2',
                'trailer' => 'WpO5V0FyByc',
                'poster' => 'https://br.web.img3.acsta.net/medias/nmedia/18/90/95/85/20122112.jpg',
                'release' => '1986',
                'tags' => 'John Hughes, Matthew Broderick',
                'genre_id' => '4',
                'sinopse' => 'No último semestre do curso do colégio, Ferris Bueller (Matthew Broderick) sente um incontrolável desejo de matar a aula e planeja um grande programa na cidade com sua namorada (Mia Sara), seu melhor amigo (Alan Ruck) e uma Ferrari. Só que para poder realizar seu desejo ele precisa escapar do diretor do colégio (Jeffrey Jones) e de sua irmã (Jennifer Grey).',
            ],
            [
                'name' => 'Tempos Modernos',
                'duration' => '01:27:00',
                'pegi_id' => '1',
                'trailer' => '4OmEi_AIjZc',
                'poster' => 'https://br.web.img2.acsta.net/r_1280_720/pictures/13/12/10/20/58/492663.jpg',
                'release' => '1940',
                'tags' => 'Charles Chaplin, Preto e Branco',
                'genre_id' => '5',
                'sinopse' => 'Um operário de uma linha de montagem, que testou uma "máquina revolucionária" para evitar a hora do almoço, é levado à loucura pela "monotonia frenética" do seu trabalho. Após um longo período em um sanatório ele fica curado de sua crise nervosa, mas desempregado. Ele deixa o hospital para começar sua nova vida, mas encontra uma crise generalizada e equivocadamente é preso como um agitador comunista, que liderava uma marcha de operários em protesto. Simultaneamente uma jovem rouba comida para salvar suas irmãs famintas, que ainda são bem garotas. Elas não tem mãe e o pai delas está desempregado, mas o pior ainda está por vir, pois ele é morto em um conflito. A lei vai cuidar das órfãs, mas enquanto as menores são levadas a jovem consegue escapar.',
            ],
            [
                'name' => 'As Vantagens de Ser Invisível',
                'duration' => '01:43:00',
                'pegi_id' => '4',
                'trailer' => 'mgzV9aSS2y0',
                'poster' => 'https://upload.wikimedia.org/wikipedia/pt/6/63/As-Vantagens-de-ser-Invisivel.jpg',
                'release' => '2012',
                'tags' => 'Emma Watson, Ezra Miller, Logan Lerman',
                'genre_id' => '5',
                'sinopse' => 'Charlie (Logan Lerman) é um jovem que tem dificuldades para interagir em sua nova escola. Com os nervos à flor da pele, ele se sente deslocado no ambiente. Seu professor de literatura, no entanto, acredita nele e o vê como um gênio. Mas Charlie continua a pensar pouco de si... até o dia em que dois amigos, Patrick (Ezra Miller) e Sam (Emma Watson), passam a andar com ele.',
            ],
            [
                'name' => 'Clube dos Cinco',
                'duration' => '01:37:00',
                'pegi_id' => '4',
                'trailer' => 'EmqkaxOw6_o',
                'poster' => 'https://br.web.img2.acsta.net/pictures/210/100/21010003_20130603204213408.jpg',
                'release' => '1985',
                'tags' => 'John Hughes, Molly Ringwald',
                'genre_id' => '5',
                'sinopse' => 'Em virtude de terem cometido pequenos delitos, cinco adolescentes são confinados no colégio em um sábado, com a tarefa de escrever uma redação de mil palavras sobre o que pensam de si mesmos. Apesar de serem pessoas completamente diferentes, enquanto o dia transcorre eles passam a aceitar uns aos outros, fazem várias confissões e tornam-se amigos.',
            ],
            [
                'name' => 'O Poderoso Chefão',
                'duration' => '02:55:00',
                'pegi_id' => '4',
                'trailer' => 'SaHZHU-44XA',
                'poster' => 'https://br.web.img3.acsta.net/medias/nmedia/18/90/93/20/20120876.jpg',
                'release' => '1972',
                'tags' => 'Mafia, Al pacino, Robert de Niro, Marlon Brando, Francis Ford Coppola',
                'genre_id' => '6',
                'sinopse' => 'Uma família mafiosa luta para estabelecer sua supremacia nos Estados Unidos depois da Segunda Guerra Mundial. Uma tentativa de assassinato deixa o chefão Vito Corleone incapacitado e força os filhos Michael e Sonny a assumir os negócios.',
            ],
            [
                'name' => 'Um Sonho de Liberdade',
                'duration' => '02:22:00',
                'pegi_id' => '5',
                'trailer' => 'Y22NgkErOAk',
                'poster' => 'https://br.web.img2.acsta.net/medias/nmedia/18/90/16/48/20083748.jpg',
                'release' => '1994',
                'tags' => 'Morgan Freeman, Tim Robbins',
                'genre_id' => '6',
                'sinopse' => 'Andy Dufresne é condenado a duas prisões perpétuas consecutivas pelas mortes de sua esposa e de seu amante. Porém, só Andy sabe que ele não cometeu os crimes. No presídio, durante dezenove anos, ele faz amizade com Red, sofre as brutalidades da vida na cadeia, se adapta, ajuda os carcereiros, etc.',
            ],
            [
                'name' => 'O Resgate do Soldado Ryan',
                'duration' => '02:50:00',
                'pegi_id' => '4',
                'trailer' => 'dcz1Tvsx_f4',
                'poster' => 'https://s2.glbimg.com/T9_QN3WDnMiCJBhjkRanrTWwoGA=/362x536/https://s2.glbimg.com/H9sLjnVv_eNaX8IBpjwBiu56778=/i.s3.glbimg.com/v1/AUTH_c3c606ff68e7478091d1ca496f9c5625/internal_photos/bs/2020/z/5/C1qeGsS5KhNsJrAEiwsg/2019-653-mk-filmes-paramount-o-resgate-do-soldado-ryan-poster.jpg',
                'release' => '1998',
                'tags' => 'Tom Hanks, Vin Diesel, Matt Damon, Bryan Cranston',
                'genre_id' => '6',
                'sinopse' => 'Ao desembarcar na Normandia, no dia 6 de junho de 1944, o Capitão Miller recebe a missão de comandar um grupo do Segundo Batalhão para o resgate do soldado James Ryan, o caçula de quatro irmãos, dentre os quais três morreram em combate. Por ordens do chefe George C. Marshall, eles precisam procurar o soldado e garantir o seu retorno, com vida, para casa.',
            ],
            [
                'name' => 'Intocáveis',
                'duration' => '01:52:00',
                'pegi_id' => '4',
                'trailer' => '-Fb8h4gChlU',
                'poster' => 'https://br.web.img2.acsta.net/medias/nmedia/18/89/89/00/20143859.jpg',
                'release' => '2011',
                'tags' => 'Omar Sy, François Cluzet',
                'genre_id' => '6',
                'sinopse' => 'Um milionário tetraplégico contrata um homem da periferia para ser o seu acompanhante, apesar de sua aparente falta de preparo. No entanto, a relação que antes era profissional cresce e vira uma amizade que mudará a vida dos dois.',
            ],
            [
                'name' => 'Interestelar',
                'duration' => '02:49:00',
                'pegi_id' => '2',
                'trailer' => 'mbbPSq63yuM',
                'poster' => 'https://play-lh.googleusercontent.com/em2griqrHoxmxEss_WM5Fi2iqSEKrEfLNAltjX54lREOR0nz0du__KuSi2bA_YNjS4w',
                'release' => '2014',
                'tags' => 'Christopher Nolan, Matthew McConaughey, Anne Hathaway',
                'genre_id' => '7',
                'sinopse' => 'As reservas naturais da Terra estão chegando ao fim e um grupo de astronautas recebe a missão de verificar possíveis planetas para receberem a população mundial, possibilitando a continuação da espécie. Cooper é chamado para liderar o grupo e aceita a missão sabendo que pode nunca mais ver os filhos. Ao lado de Brand, Jenkins e Doyle, ele seguirá em busca de um novo lar.',
            ],
            [
                'name' => 'A Origem',
                'duration' => '02:28:00',
                'pegi_id' => '4',
                'trailer' => 'R_VX0e0PX90',
                'poster' => 'https://musicart.xboxlive.com/7/e63b1100-0000-0000-0000-000000000002/504/image.jpg?w=1920&h=1080',
                'release' => '2010',
                'tags' => 'Leonardo DiCaprio, Joseph Gordon-Levitt, Tom Hardy',
                'genre_id' => '7',
                'sinopse' => 'Dom Cobb é um ladrão com a rara habilidade de roubar segredos do inconsciente, obtidos durante o estado de sono. Impedido de retornar para sua família, ele recebe a oportunidade de se redimir ao realizar uma tarefa aparentemente impossível: plantar uma ideia na mente do herdeiro de um império. Para realizar o crime perfeito, ele conta com a ajuda do parceiro Arthur, o discreto Eames e a arquiteta de sonhos Ariadne. Juntos, eles correm para que o inimigo não antecipe seus passos.',
            ],
            [
                'name' => 'Matrix',
                'duration' => '02:16:00',
                'pegi_id' => '4',
                'trailer' => '2KnZac176Hs',
                'poster' => 'https://br.web.img2.acsta.net/medias/nmedia/18/91/08/82/20128877.JPG',
                'release' => '1999',
                'tags' => 'Keanu Reeves, Laurence Fishburne',
                'genre_id' => '7',
                'sinopse' => 'Um jovem programador é atormentado por estranhos pesadelos nos quais sempre está conectado por cabos a um imenso sistema de computadores do futuro. À medida que o sonho se repete, ele começa a levantar dúvidas sobre a realidade. E quando encontra os misteriosos Morpheus e Trinity, ele descobre que é vítima do Matrix, um sistema inteligente e artificial que manipula a mente das pessoas e cria a ilusão de um mundo real enquanto usa os cérebros e corpos dos indivíduos para produzir energia.',
            ],
            [
                'name' => 'O Exterminador do Futuro',
                'duration' => '01:47:00',
                'pegi_id' => '4',
                'trailer' => '0yfpLhW-Xyg',
                'poster' => 'https://br.web.img2.acsta.net/medias/nmedia/18/92/91/08/20224693.jpg',
                'release' => '1984',
                'tags' => 'Arnold Schwarzenegger, James Cameron',
                'genre_id' => '7',
                'sinopse' => 'Disfarçado de humano, o assassino conhecido como o Exterminador (Arnold Schwarzenegger) viaja de 2029 a 1984 para matar Sarah Connor (Linda Hamilton). Enviado para proteger Sarah está Kyle Reese (Michael Biehn), que divulga a chegada do Skynet, um sistema de inteligência artificial que detonará um holocausto nuclear. Sarah é o alvo porque a Skynet sabe que seu futuro filho comandará a luta contra eles. Com o implacável Exterminador os perseguindo, Sarah e Kyle tentam sobreviver.',
            ],
            [
                'name' => 'Diário de uma Paixão',
                'duration' => '02:04:00',
                'pegi_id' => '4',
                'trailer' => '9FRllA0YP3Y',
                'poster' => 'https://br.web.img3.acsta.net/medias/nmedia/18/91/21/92/20135014.jpg',
                'release' => '2004',
                'tags' => 'Ryan Gosling, Nick Cassavetes',
                'genre_id' => '8',
                'sinopse' => 'Na década de 40, na Carolina do Sul, o operário Noah Calhoun e a rica Allie se apaixonam desesperadamente, mas os pais da jovem não aprovam o namoro. Noah então é enviado para combater na Segunda Guerra Mundial, e parece ser o fim do romance. Enquanto isso, Allie se envolve com outro homem. No entanto, se torna claro que a paixão deles ainda não acabou quando Noah retorna para a pequena cidade anos mais tarde, próximo ao casamento de Allie.',
            ],
            [
                'name' => '...E o Vento Levou',
                'duration' => '03:58:00',
                'pegi_id' => '1',
                'trailer' => 'KxYVSblvWQk',
                'poster' => 'https://br.web.img3.acsta.net/medias/nmedia/18/90/95/72/20122043.jpg',
                'release' => '1939',
                'tags' => 'Victor Fleming, ',
                'genre_id' => '8',
                'sinopse' => 'Scarlett O Hara é uma jovem mimada que consegue tudo o que quer. No entanto, algo falta em sua vida: o amor de Ashley Wilkes, um nobre sulista que deve se casar com a sua prima Melanie. Tudo muda quando a Guerra Civil americana explode e Scarlett precisa lutar para sobreviver e manter a fazenda da família.',
            ],
            [
                'name' => 'Titanic',
                'duration' => '03:14:00',
                'pegi_id' => '3',
                'trailer' => 'kVrqfYjkTdQ',
                'poster' => 'https://br.web.img2.acsta.net/medias/nmedia/18/89/56/94/20055685.jpg',
                'release' => '1997',
                'tags' => 'Kate Winslet, Leonardo DiCaprio, James Cameron',
                'genre_id' => '8',
                'sinopse' => 'Um artista pobre e uma jovem rica se conhecem e se apaixonam na fatídica jornada do Titanic, em 1912. Embora esteja noiva do arrogante herdeiro de uma siderúrgica, a jovem desafia sua família e amigos em busca do verdadeiro amor.',
            ],
            [
                'name' => 'O Silêncio dos Inocentes',
                'duration' => '01:58:00',
                'pegi_id' => '4',
                'trailer' => '8Qsq6DrYDxE',
                'poster' => 'https://br.web.img3.acsta.net/pictures/14/10/07/22/16/591185.jpg',
                'release' => '1991',
                'tags' => 'Anthony Hopkins, hannibal, Jodie Foster, Jonathan Demme',
                'genre_id' => '9',
                'sinopse' => 'Uma jovem e talentosa agente do FBI é aconselhada pelo Dr. Hannibal Lecter, um psiquiatra brilhante e também um psicopata violento e canibal, a fim de conseguir capturar outro assassino.',
            ],
            [
                'name' => 'O Sexto Sentido',
                'duration' => '01:47:00',
                'pegi_id' => '4',
                'trailer' => '3-ZP95NF_Wk',
                'poster' => 'https://br.web.img2.acsta.net/medias/nmedia/18/90/53/94/20101506.jpg',
                'release' => '1999',
                'tags' => ' M. Night Shyamalan, Haley Joel Osment, Bruce Willis',
                'genre_id' => '9',
                'sinopse' => 'Um garoto vê o espírito de pessoas mortas à sua volta. Um dia, ele conta o segredo ao psicólogo Malcolm Crowe, que tenta ajudá-lo a descobrir o que está por trás dos distúrbios. A pesquisa de Crowe sobre os poderes do garoto causa consequências inesperadas a ambos.',
            ],
            [
                'name' => 'Psicose',
                'duration' => '01:49:00',
                'pegi_id' => '4',
                'trailer' => 'S-VmJXFW9-o',
                'poster' => 'https://br.web.img3.acsta.net/pictures/14/10/07/20/12/205686.jpg',
                'release' => '1960',
                'tags' => 'Preto e Branco, Alfred Hitchcock',
                'genre_id' => '9',
                'sinopse' => 'Após roubar 40 mil dólares para se casar com o namorado, uma mulher foge durante uma tempestade e decide passar a noite em um hotel que encontra pelo caminho. Ela conhece o educado e nervoso proprietário do estabelecimento, Norman Bates, um jovem com um interesse em taxidermia e com uma relação conturbada com sua mãe. O que parece ser uma simples estadia no local se torna uma verdadeira noite de terror.',
            ],
            [
                'name' => 'Se7en - Os Sete Crimes Capitais',
                'duration' => '02:07:00',
                'pegi_id' => '4',
                'trailer' => 'znmZoVkCjpI',
                'poster' => 'https://br.web.img3.acsta.net/pictures/210/124/21012465_2013061319170245.jpg',
                'release' => '1995',
                'tags' => 'Brad Pitt, Morgan Freeman, David Fincher',
                'genre_id' => '9',
                'sinopse' => 'A ponto de se aposentar, o detetive William Somerset pega um último caso, com a ajuda do recém-transferido David Mills. Juntos, descobrem uma série de assassinatos e logo percebem que estão lidando com um assassino que tem como alvo pessoas que ele acredita representar os sete pecados capitais.',
            ],
            [
                'name' => 'Alien - O 8.º Passageiro',
                'duration' => '01:57:00',
                'pegi_id' => '4',
                'trailer' => 'LjLamj-b0I8',
                'poster' => 'https://br.web.img3.acsta.net/pictures/15/05/14/21/14/504650.jpg',
                'release' => '1979',
                'tags' => 'Ridley Scott, Sigourney Weaver ',
                'genre_id' => '10',
                'sinopse' => 'Uma nave espacial, ao retornar para Terra, recebe estranhos sinais vindos de um asteroide. Enquanto a equipe investiga o local, um dos tripulantes é atacado por um misterioso ser. O que parecia ser um ataque isolado se transforma em um terror constante, pois o tripulante atacado levou para dentro da nave o embrião de um alienígena, que não para de crescer e tem como meta matar toda a tripulação.',
            ],
            [
                'name' => 'O Exorcista',
                'duration' => '02:12:00',
                'pegi_id' => '4',
                'trailer' => 'cGAZPUKw3lU',
                'poster' => 'https://images.filmesnocinema.com.br/covers/o-exorcista-versao-do-diretor-cf.',
                'release' => '1973',
                'tags' => '',
                'genre_id' => '10',
                'sinopse' => 'Uma atriz vai gradativamente tomando consciência de que a sua filha de doze anos está tendo um comportamento completamente assustador. Deste modo, ela pede ajuda a um padre, que também é um psiquiatra, e este chega a conclusão de que a garota está possuída pelo demônio. Ele solicita então a ajuda de um segundo sacerdote, especialista em exorcismo, para tentar livrar a menina desta terrível possessão.',
            ],
            [
                'name' => 'Invocação do Mal',
                'duration' => '01:52:00',
                'pegi_id' => '4',
                'trailer' => 'GQrrXceHn2E',
                'poster' => 'https://br.web.img2.acsta.net/pictures/210/166/21016629_2013062820083878.jpg',
                'release' => '2013',
                'tags' => ' William Friedkin, Linda Blair',
                'genre_id' => '10',
                'sinopse' => 'Os investigadores paranormais Ed e Lorraine Warren trabalham para ajudar a família aterrorizada por uma entidade demoníaca em sua fazenda.',
            ],
            [
                'name' => 'O Iluminado',
                'duration' => '02:26:00',
                'pegi_id' => '4',
                'trailer' => 'm6FRnb2AvvE',
                'poster' => 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQgBcnfLW2H68J2aqMN3Fj7SOoDY05UYvZlepL_KkjIfC78dxyx',
                'release' => '1980',
                'tags' => 'Stanley Kubrick, Jack Nicholson',
                'genre_id' => '10',
                'sinopse' => 'Jack Torrance se torna caseiro de inverno do isolado Hotel Overlook, nas montanhas do Colorado, na esperança de curar seu bloqueio de escritor. Ele se instala com a esposa Wendy e o filho Danny, que é atormentando por premonições. Jack não consegue escrever e as visões de Danny se tornam mais perturbadoras. O escritor descobre os segredos sombrios do hotel e começa a se transformar em um maníaco homicida, aterrorizando sua família.',
            ]
        ]);
    }
}

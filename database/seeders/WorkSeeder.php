<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('works')->insert([
      [
        'title' => 'GETRONIC',
        'logo_image' => 'public/4ODneTWy7iwbLEwYTlWVd0ePUrc5TpBE1Cdf3zZr.jpg',
        'monography' => 'public/3uGVkBCGYVLuykbtOrUYcQhKz7cFG7e38crsjFzu.pdf',
        'author' => 'Romário Sérgio Aparecido Silva',
        'email_author' => 'romario.silva@fatec.sp.gov.br',
        'member_one' => 'Alexande Ferreira Alves Miguez',
        'email_one' => 'alexandre.miguez@fatec.sp.gov.br',
        'member_two' => 'Georgios Markakis',
        'email_two' => 'georgios.markakis@fatec.sp.gov.br',
        'member_three' => 'Simone Thomé Andrade',
        'email_three' => 'simone.andrade@fatec.sp.gov.br',
        'member_four' => null,
        'email_four' => null,
        'user_id' => '2',
        'created_at' => now(),
        'updated_at' => now(),
        'description' => 'O presente trabalho irá abordar o desenvolvimento de um software GED, gerenciamento eletrônico de documentos, para um setor financeiro com foco na expedição de contratos veiculares. Para tal elaboração, utilizou-se a metodologia de pesquisa exploratória através de livros, trabalhos publicados e funcionários de uma empresa que atua no setor de consultoria financeira e que lida diariamente com um grande fluxo de documentos. A empresa em questão apresenta dificuldade em lidar com vários softwares para a tratativa dos contratos no dia a dia, impactando na produtividade da equipe.',
      ],
      [
        'title' => 'DEMOCRATEC',
        'logo_image' => 'public/RLrrJPqwN4jkFDe8LumgqWy7fY3fKfwxPxdzZ3TB.png',
        'monography' => 'public/z0HrllpmVYfAX455JEfB16ZP3URQjaV1nqRLjL5L.pdf',
        'author' => 'Romário Sérgio Aparecido Silva',
        'email_author' => 'romario.silva@fatec.sp.gov.br',
        'member_one' => 'Jonathan Augusto Jorge',
        'email_one' => 'jonathan.jorge@fatec.sp.gov.br',
        'member_two' => 'Juliana de Oliveira Veiga',
        'email_two' => 'juliana.veiga@fatec.sp.gov.br',
        'member_three' => 'Matheus Camargo da Conceição',
        'email_three' => 'matheus.conceicao@fatec.sp.gov.br',
        'member_four' => 'Vagner Matos do Carmo',
        'email_four' => 'vagner.carmo@fatec.sp.gov.br',
        'user_id' => '3',
        'created_at' => now(),
        'updated_at' => now(),
        'description' => 'DEMOCRATEC é um aplicativo mobile que se destina ao seguimento eleitoral e tem como finalidade auxiliar as instituições de ensino nas diversas votações que possam vir a ter, tais como representantes de sala, CIPA (Comissão Interna de Prevenção de Acidentes), órgãos colegiados, dentre outras. A proposição para o desenvolvimento deste projeto se deu não somente em virtude da necessidade de uma aplicação que garanta a integridade na hora de eleger um representante, seja qual for a função que este desempenhará, mas por uma série de acontecimentos que evidenciaram a necessidade de se possuir um sistema como este no cenário da Faculdade de Tecnologia de Carapicuíba, objeto de estudo deste trabalho. Desde sua fundação em 2006 até a data de hoje, a instituição já realizou diversas eleições, no entanto, em todas elas seu método de votação se mostrou um tanto quanto arcaico, considerando o material usado (folha de papel sulfite e caneta esferográfica) e a forma de apuração adotada para a contagem de votos. Tendo como base o cenário atual em que se encontra a instituição, este trabalho traz consigo a proposta do desenvolvimento de uma aplicação mobile híbrida que auxilie a faculdade a implantar o processo de votação existente dentro do campus através de um sistema computadorizado e, não somente isso, que forneça segurança, praticidade e privacidade ao usuário que irá realizar o voto.',
      ]
    ]);
  }
}

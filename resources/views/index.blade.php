@extends('components.layout')

@section('titulo', "HOME")

@section('conteudo')
<!--BANNER-->
  <div class="flex justify-center items-center bg-gray-900" >
      <img src="{{ asset('img/banner.webp') }}" alt="Paisagem Escola Etec Zona Leste">
  </div>
<!--FIM BANNER-->

  <div class="bg-gray-950 p-10 flex flex-col items-center justify-center">
      <h1 class="text-5xl text-slate-50 font-bold">
          Etec Zona Leste
      </h1>
      <p class="text-2xl text-slate-50">
          Excelência em Educação Técnica na Região da Zona Leste de São Paulo
      </p>
  </div>

  <div class="bg-gray-950 flex flex-col justify-center items-center py-5">
      
      <div class="max-w-5xl flex flex-col justify-between items-center md:flex-row">
          <div class="px-5">
              <h2 class="text-2xl text-slate-50 font-bold">
                  Descubra um futuro brilhante na ETEC Zona Leste
              </h2>
              <p class="text-lg text-slate-50 text-justify max-w-4xl">
                  Na ETEC Zona Leste, a excelência educacional é a nossa prioridade máxima. Nossos cursos técnicos são ministrados por professores altamente qualificados, proporcionando uma educação satisfatória que combina conhecimentos acadêmicos sólidos com habilidades práticas essenciais para o mercado de trabalho.
              </p>
          </div>

          <div>
              <img src="{{ asset('img/patio.webp') }}" alt="Patio Escola Etec Zona Leste" class="rounded-lg object-cover">
          </div>
      </div>

      <div class="max-w-5xl flex flex-col justify-between items-center md:flex-row">
          <div>
              <img src="{{ asset('img/auditorio.webp') }}" alt="Auditorio Escola Etec Zona Leste" class="rounded-lg object-cover">
          </div>

          <div class="px-10">
              <h2 class="text-2xl text-slate-50 font-bold">
                  Aprendizados para além da sala de aula
              </h2>
              <p class="text-lg text-slate-50 text-justify max-w-4xl">
                  Buscamos levar o conhecimento para além da sala de aula tradicional. Incentivamos o cultivo de conexões valiosas por meio de networking e oportunidades de carreira. Além do sucesso acadêmico, nos preocupamos com o desenvolvimento pessoal de nosso corpo estudantil, oferecendo suporte abrangente, orientação vocacional e programas extracurriculares.
              </p>
          </div>
      </div>

      <div class="max-w-5xl flex flex-col justify-between items-center md:flex-row">
          <div class="px-5">
              <h2 class="text-2xl text-slate-50 font-bold">
                  Infraestrutura Moderna
              </h2>
              <p class="text-lg text-slate-50 text-justify max-w-4xl">
                  Contamos com uma infraestrutura moderna, laboratórios e salas equipadas com televisões, computadores, notebooks, impressoras 3D e muitos outros componentes propícios aos projetos que desenvolvemos durante a jornada dos estudantes. Na ETEC Zona Leste, você encontrará um ambiente favorável para o impulsionar seu crescimento acadêmico e profissional.
              </p>
          </div>

          <div>
              <img src="{{ asset('img/laboratorio.webp') }}" alt="Laboratório de Informática Escola Etec Zona Leste" class="rounded-lg object-cover">
          </div>
      </div>

  </div>
@endsection
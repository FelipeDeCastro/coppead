//MENU
var Menu = {
    
    //Animação de mouse over do menu principal
    init: function(){
        if($('#topo #menu-superior ul li ul li a').hasClass('active')){
            $('#topo #menu-superior').css({'height': '136'});
            $('#topo #menu-superior ul li ul li a.active').parents('ul.submenu').show();
            $('#topo #menu-superior ul li').hover(        
                function(){
                    var este = $(this).find('ul.submenu');
                    if($(this).find('ul').hasClass('submenu')){
                        if($(this).find('a').hasClass('active')){}
                        else{
                            $('#topo #menu-superior ul li ul li a.active').parents('ul.submenu').fadeOut(200);
                            $(este).fadeIn(200);                      
                        }
                    }
                    else if($(this).find('a').hasClass('contato')){
                        $('#topo #menu-superior ul li ul li a.active').parents('ul.submenu').fadeOut(200);
                    }
                },
                function(){
                    if($(this).find('ul').hasClass('submenu')){
                        if($(this).find('a').hasClass('active')){}
                        else{
                            $('ul.submenu').fadeOut(200);
                            $('#topo #menu-superior ul li ul li a.active').parents('ul.submenu').fadeIn(200);
                        }
                    }
                    else if($(this).find('a').hasClass('contato')){
                        $('#topo #menu-superior ul li ul li a.active').parents('ul.submenu').fadeIn(200);
                    }
                }
            );
        }
        else{
            $('#topo #menu-superior ul li ul').parent('li').hover(        
                function(){
                    var este = $(this).find('ul.submenu');
                    $('#topo #menu-superior').stop(true,false).animate({height: '136'}, 200, 'easeOutQuart', function(){$(este).fadeIn(200);}).css('overflow', 'visible');
                },
                function(){
                    $('#topo #menu-superior').stop(true,false).animate({height: '68'}, 300, 'easeOutQuint').css('overflow', 'visible');
                    $('#topo #menu-superior ul li ul').fadeOut(100);
                }
            );
        }    
    }

}

//HOME: DESTAQUES
var CarroselDestaques = {

    //Inicia, configura o carrosel e chama as animações de transição
    //Plugin: Cycle Jquery
    //Documentação: http://jquery.malsup.com/cycle/
    init: function(){
        $('#destaques #container').cycle({
            fx:'cover',
            speed:400,
            requeueTimeout: 5000,
            next: '#proximo-destaque', 
            prev: '#destaque-anterior',
            before: CarroselDestaques.EscondeTexto,
            after: CarroselDestaques.MostraTexto,
            onPrevNextEvent: CarroselDestaques.EscondeTudo
        });
        CarroselDestaques.EscondeVideo();
    },
    
    //Animação de esconder texto                                     
    EscondeTexto: function(){
        $('#destaques #container h2').stop(true,false).animate({right:0, opacity:0}, 800, 'easeOutExpo');
    },
    
    //Animação de mostrar o texto
    MostraTexto: function(){
        $('#destaques #container h2').stop(true,false).animate({right: '720', opacity:'1'}, 500, 'easeOutQuint');
    },
    
    //Animação de esconder o vídeo
    EscondeVideo: function(){
        var videos = $('#destaques .destaque span').map(function() { return $(this).html() || null; }).get();
        $('#destaques .destaque a.video').each(function(i){
            $(this).attr('rel',i);
        });
        
        $('#destaques .destaque span iframe').remove();
            
        $('#destaques .destaque a.botao').click(function(e){
            e.preventDefault();
            
            if($(this).hasClass('video')){
                
                var index = $(this).attr('rel');
                
                $(this).prev('span').html(videos[index]);
                $('#destaques #container').cycle('pause');
            };
        })    
    },   
    
    //Função que dispara as animações de esconder texto e vídeo
    EscondeTudo: function(){
        CarroselDestaques.EscondeTexto();
        CarroselDestaques.EscondeVideo();
        $('#destaques #container').cycle('resume');
    }
    
}
 
//HOME: LISTA DE ALUNOS  
var ListaAlunos = {

    //Comportamento do submenu de filtros
    filtros: function(){
        $('ul#sidebar li a.select').hover(
            function(){
                $(this).siblings('ul.tudo').stop(true,false).slideDown(200);
                $(this).find('.seta').stop(true,false).fadeIn('fast')
                $(this).css({'background-color':'#ebebeb'})
            }, function(){
                $(this).siblings('ul.tudo').stop(true,false).delay(200).slideUp(200);
                $(this).find('.seta').stop(true,false).delay(200).fadeOut('fast')
                $(this).delay(200).css({'background-color':'#fff'})
            }
        );
        $('ul#sidebar li ul.tudo').hover(
            function(){
                $(this).stop(true,false).slideDown(200);
                $(this).siblings('a.select').find('.seta').stop(true,false).fadeIn('fast')
                $(this).siblings('a.select').css({'background-color':'#ebebeb'})
            }, function(){
                $(this).stop(true,false).delay(200).slideUp(200);
                $(this).siblings('a.select').find('.seta').delay(200).fadeOut('fast')
                $(this).siblings('a.select').delay(200).css({'background-color':'#fff'})
            }
        );
    },

    //Comportamento de mouse over do resumo dos alunos
    resumo: function(){
        $('ul#conteudo li').hover(
            function(){
                $(this).find('.info').stop(true,true).delay(150).slideDown(400, 'easeOutQuint');
                $(this).find('h4').css({'color':'#fff', 'border-color': '#232323'});
                $(this).css('background', '#8d1a13');
            }, function(){
                $(this).find('.info').stop(true,true).delay(100).slideUp(400, 'easeOutQuint');
                $(this).find('h4').css({'color':'#6e6e6e', 'border-color': '#6e6e6e'});
                $(this).css('background', '#fff');
            }
        );
       
    }
}    

//ABAS DE NAVEGAÇÃO
var Abas ={

    init: function(){

        $('.container').hide();
        $('#conteudo1').show();
 
        $('ul#abas li a').click(function(e){
            e.preventDefault();

            var target = $(this).attr('href')

            $('ul#abas li a').removeClass('active');
            $('.container').fadeOut(300)
            $(this).addClass('active');
            $(target).delay(300).fadeIn('fast');
        })
    }
}

//DEPOIMENTOS
var Depoimentos = {

    init: function(){
        $('#detalhes .depoimento:even').addClass('impar');

        $('#detalhes .depoimento').each(function(){
            var imagemNormal = $(this).attr('rel1');
            $(this).find('.wrap').css('background-image', 'url(' + imagemNormal + ')');
        });
        Depoimentos.efeitoHover();
        Depoimentos.efeitoClique();
    },

    efeitoHover: function(){
        $('#detalhes .depoimento').hover(
            function(){
                if($(this).hasClass('aberto')){}
                else{
                    var imagemNegativa = $(this).attr('rel2');
                    $(this).find('.wrap').css({'background-image': 'url(' + imagemNegativa + ')', 'background-position': 'center right'});
                }
            },
            function(){
                if($(this).hasClass('aberto')){}
                else{
                    var imagemNormal = $(this).attr('rel1');
                    $(this).find('.wrap').css({'background-image': 'url(' + imagemNormal + ')', 'background-position': 'center right'});
                }
            }
        )
    },

    efeitoClique: function(){
        $('#detalhes .depoimento').click(function(){

            if($(this).hasClass('aberto')){
                var imagemNormal = $(this).attr('rel1');
                $(this).removeClass('aberto');
                $(this).find('.wrap').find('p').hide();
                $(this).find('.wrap').css('background-image', 'url(' + imagemNormal + ')');
            }
            else{
                var imagemNormal = $(this).attr('rel1');
                var imagemMaior = $(this).attr('rel3');
                $('#detalhes .depoimento').removeClass('aberto')
                $('#detalhes .depoimento').find('.wrap').find('p').hide();
                $('#detalhes .depoimento').find('.wrap').css('background-image', 'url(' + imagemNormal + ')');        
                $(this).addClass('aberto');
                $(this).find('.wrap').find('p').show();
                $(this).find('.wrap').css('background-image', 'url(' + imagemMaior + ')');
            }
        });
    }
}

//FORMULÁRIO DE CONTATO
var Formulario = {

    init: function(){
        $('#detalhes.contato #conteudo form input').focus(function(){
            msg = $(this).attr('rel');
            console.log(msg);
            if ($(this).attr('value') == msg){ $(this).attr('value','')}
        });
        $('#detalhes.contato #conteudo form input').blur(function(){
            msg = $(this).attr('rel');
            if ($(this).attr('value') == ''){ $(this).attr('value',msg)}
        });
        Formulario.mostrarCampos();
    },

    mostrarCampos: function(){
        $('#detalhes.contato #conteudo form #opcionais').slideUp();
        $("[name='caderno']").click(function(){
            if ($("[name='caderno']:checked").val() == 'sim'){
                $('#detalhes.contato #conteudo form #opcionais').slideDown();
            }
            else{
                $('#detalhes.contato #conteudo form #opcionais').slideUp();
            }
        });
    }
}

//Ao carregar todo o documento...
jQuery(document).ready(function($) {
    Menu.init();
    CarroselDestaques.init();
    ListaAlunos.filtros();
    ListaAlunos.resumo();
    Abas.init();
    Depoimentos.init();
    Formulario.init();
});
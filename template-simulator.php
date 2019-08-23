<?php
/*
  Template Name: Simulator
 */
get_header();
?> 
<style>
  .btn-drop , .peirodicidade ,.bte-perio , .mt-perio,.ciclo ,.btn-drop,.consumohora ,.pontenciah ,.consumo-ponta ,.consumo-cheia,.consumo-vazio , .consumo-supervazio ,.consumo-foravazio ,consumo-simples ,.potencia-kwh ,.preuni-simple , .preuni-foravazio ,.preuni-supervazio ,.preuni-vazio ,.preuni-cheia ,.preuni-ponta
   {
  display:none;
  }
  .subheading
  {
      display:block;
      clear:both;
  }
  </style>


  <div class="wraper-radiantthemes-event simulador-sec-main">
        <div class="container">
            <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php
    				while ( have_posts() ) :
    					the_post();
    					the_content();
    				endwhile; // End of the loop.limpeza 
    				?>
				</div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="col-md-4 col-sm-4">
                           <ul class="simulator">
                               <li class="electricidade simulatorcategory showblock"><span class="arrgreater">&gt; </span> Electricidade  </li>
                               <li class="telecomunicacoes simulatorcategory "> <span class="arrgreater">&gt; </span>Telecomunicações  </li>
                               <li class="medicinano simulatorcategory"> <span class="arrgreater">&gt; </span> Medicina no Trabalho </li>
                               <li class="saudenotrabalho simulatorcategory"> <span class="arrgreater">&gt; </span> Segurança no Trabalho </li>
                               <li class="limpeza simulatorcategory"> <span class="arrgreater">&gt; </span> Limpeza  </li>
                               <li class="vigilancia simulatorcategory"> <span class="arrgreater">&gt; </span> Vigilância </li>
                               <li class="consumiveisde simulatorcategory"> <span class="arrgreater">&gt; </span>  Consumíveis de higiene e limpeza  </li>
                               <li class="pragas simulatorcategory"> <span class="arrgreater">&gt; </span> Pragas </li>
                               <li class="seguroautomovel simulatorcategory"> <span class="arrgreater">&gt; </span> Seguro automóvel</li>
                               
                           </ul>
                      </div>
                      <div class="col-md-8 col-sm-8">
                      <form  method="post" name="form1" id="esiform">
                           <div class="fieldarea electricidade showblock">                          
                              <p  class="subheading"><strong>OPÇÕES Contratualizadas</strong></p>
                              <div class="col-md-6 col-sm-6">
                                       <select name="niveldetensao" class="all_fields niveldetensao">
                                        <option selected="true" disabled="disabled">Nível de tensão</option>
                                        <option value="bte">BTE</option>
                                        <option value="mt" >MT</option>
                                        <option value="btn" >BTN</option>
                                      </select> 
                              </div>
                              <div class="col-md-6 col-sm-6">
                              <div class="bte-mt">
                              <input type="text" id="bte-mt" class="all_fields "  placeholder="Potência contratada"  name="potenciacontratada"step="any"  >
                               </div>   
                              <div class="btn-drop">
                                       <select name="btndropp" class="all_fields btnn btn-drop">
                                        <option selected="true" disabled="disabled">Potência contratada</option>
                                        <?php
                                 $arg1 = array('post_type'  => 'simulator','p'=>'9808');
                                 $the_query1 = new WP_Query( $arg1 );
                                 if ( $the_query1->have_posts() ) {
                               while ( $the_query1->have_posts() ) {
                                $the_query1->the_post();
                                if( have_rows('btn-dropdown') ):

                                  while ( have_rows('btn-dropdown') ) : the_row();
                                 ?> <option value="<?php the_sub_field('potência'); ?>"><?php the_sub_field('potência'); ?></option>

                                 <?php 
                                  endwhile;

                                endif;
                                    }
                                    }       wp_reset_postdata();

                                  ?>
                                        
                                      </select> 
                                      
                                      
                                      <?php
                                 $arg2 = array('post_type'  => 'simulator','p'=>'9808');
                                 $the_query2 = new WP_Query( $arg2 );
                                 if ( $the_query2->have_posts() ) {
                               while ( $the_query2->have_posts() ) {
                                $the_query2->the_post();
                                if( have_rows('btn-dropdown') ):
                                   $i=1;
                                  while ( have_rows('btn-dropdown') ) : the_row();
                                 ?> 
                                 <div id="btndrop<?php echo $i; ?>" >
                               <input  type="hidden"  class="valorbtn" name="btn[<?php the_sub_field('potência'); ?>][valor]" value="<?php the_sub_field('valor_potência_contratada_€mês');?>">
                                  <input type="hidden"  class="btnsimple" name="btn[<?php the_sub_field('potência'); ?>][simple]" value="<?php the_sub_field('simples');?>">
                                  <input type="hidden"   class="btnbihorafo" name="btn[<?php the_sub_field('potência'); ?>][bihorafo]" value="<?php the_sub_field('bi-horario-fora');?>">
                                  <input type="hidden" class=" btnbivazio"  name="btn[<?php the_sub_field('potência'); ?>][bivazio]" value="<?php the_sub_field('bi-horario');?>">
                                  <input type="hidden" class="btntriponta" name="btn[<?php the_sub_field('potência'); ?>][triponta]" value="<?php the_sub_field('tri-horario-ponta');?>">
                                  <input type="hidden" class=" btntrichia" name="btn[<?php the_sub_field('potência'); ?>][trichia]" value="<?php the_sub_field('tri-horario-chia');?>">
                                  <input type="hidden" class=" btntrivazio "  name="btn[<?php the_sub_field('potência'); ?>][trivazio]" value="<?php the_sub_field('tri-horario-vazio');?>">
                                </div>
                                 <?php $i++;
                                  endwhile;

                                endif;
                                    }
                                    }       wp_reset_postdata();

                                  ?>
                                      </div>
                              </div>
                              <div class="col-md-6 col-sm-6 bte-perio">
                              <select name="peirodicidade" class="all_fields peirodicidade bte-perio">
                                        <option selected="true" disabled="disabled">Peirodicidade</option>
                                        <option value="diario">Diário</option>
                                        <option value="semanal" >Semanal</option>
                              </select> 
                              </div>
                              <div class="col-md-6 col-sm-6 mt-perio">
                              <select name="peirodicidade" class="all_fields peirodicidade mt-perio">
                                        <option selected="true" disabled="disabled">Peirodicidade</option>
                                        <option value="semanal">Semanal</option>
                                        <option value="semanal-opcional" >Semanal Opcional</option>
                                        
                               </select> 
                              </div>
                              <div class="col-md-6 col-sm-6 ciclo">
                              <select name="ciclo" class="all_fields ciclo btn-cic">
                                        <option selected="true" disabled="disabled">Ciclo</option>
                                        <option value="simples">Simples</option>
                                        <option value="bi-diario" >Bi-Diário</option>
                                        <option value="tri-horario" >Tri-Horário</option>
                              </select>  
                              </div>
                              <div class="col-md-6 col-sm-6">
                                 <input type="text" id="ndiasdafatura" class="all_fields ndiasdafatura"  placeholder="Nº dias da Fatura"  name="ndiasdafatura"   >
                              </div>

                             <p  class="subheading"><strong>CONSUMOS em Kwh</strong></p>
                          
                              <div class="col-md-6 col-sm-6 pontenciah">
                                 <input type="text"  id="pontenciah" class="all_fields pontenciah"  placeholder="Potência horas de Ponta em KW"  name="potenciahorasdepontaemkm"  >
                                 <span class="smtext">*Se na sua fatura este valor estiver em kWh é necessário dividi-lo pelo número de horas</span>
                              </div>
                              
                              <div class="col-md-6 col-sm-6 consumo-ponta">
                                 <input type="text" id="consumo-ponta" class="all_fields consumo-ponta"  placeholder="Consumo médio mensal (kW) - Ponta"  name="consumomediomental-ponta" >
                              </div>
                              <div class="col-md-6 col-sm-6 consumo-cheia">
                                 <input type="text" id="consumo-cheia" class="all_fields consumo-cheia"  placeholder="Consumo médio mensal (kW) - Cheia"  name="consumomediomental-cheia"   >
                              </div>
                              <div class="col-md-6 col-sm-6 consumo-vazio">
                                 <input type="text" id="consumo-vazio" class="all_fields consumo-vazio"  placeholder="Consumo médio mensal (kW) - Vazio"  name="consumomediomental-vazio"   >
                              </div>
                              <div class="col-md-6 col-sm-6 consumo-supervazio">
                                 <input type="text"  id="consumo-supervazio" class="all_fields consumo-supervazio"  placeholder="Consumo médio mensal (kW) - Super Vazio "  name="consumomediomental-supervazio" >
                              </div>
                              <div class="col-md-6 col-sm-6 consumo-foravazio">
                                 <input type="text" id="consumo-foravazio" class="all_fields consumo-foravazio"  placeholder="Consumo médio mensal (kW) - Fora Vazio "  name="consumomediomental-foravazio"   >
                              </div>
                              <div class="col-md-6 col-sm-6 consumo-simples">
                                 <input type="text" id="consumo-simples" class="all_fields consumo-simples"  placeholder="Consumo médio mensal (kW) - Simples"  name="consumomediomental-simples"  >
                              </div>
                              <!-- <div class="col-md-6 col-sm-6 consumohora">
                                 <input type="text" id="consumohora" class="all_fields consumohora"  placeholder="Consumo de horas em ponta (h)"  name="consumodehorasempontah"  >
                              </div>------------>
                              <p class="subheading"><strong>PREÇOS unitários em EUR(valores sem taxas ERSE)</strong></p>
                                         
                              <div class="col-md-6 col-sm-6 valor-potencia">
                                 <input type="text" id="valor-potencia" class="all_fields valor-potencia"  placeholder="Valor Potência (€/dia) contratada"  name="valorpotencia-contratada"   >
                              </div>
                              <div class="col-md-6 col-sm-6 potencia-kwh">
                                 <input type="text"  id="potencia-kwh" class="all_fields potencia-kwh"  placeholder="Potência horas de ponta (€/kWh)"  name="potencia-horas-de-ponta-kwh"   >
                              </div>
                              <!----------------------------------------hidden fields ------------->
                              <?php
                                 $arg = array('post_type'  => 'simulator','p'=>'9808');
                                 $the_query = new WP_Query( $arg );
                                 if ( $the_query->have_posts() ) {
                               while ( $the_query->have_posts() ) {
                                $the_query->the_post();
                                 ?>     
                                 <!----------BTE Diaro---------->
                                 <input type="hidden" id="bvalorh" name="bvalorh" value="<?php the_field('valorpotência€dia_contratada_bte_dia');?>">
                                 <input type="hidden" id="bpotench" name="bpotench" value="<?php the_field('potência_horas_de_ponta_€kwh_bte_dia');?>">
                                 <input type="hidden" id="bpontah" name="bpontah" value="<?php the_field('ponta_bte_dia');?>">
                                 <input type="hidden" id="bchiah" name="bchiah" value="<?php the_field('cheia_bte_dia');?>">
                                 <input type="hidden" id="bvazioh" name="bvazioh" value="<?php the_field('vazio_bte_dia');?>">
                                 <input type="hidden" id="bsuperh" name="bsuperh" value="<?php the_field('super_vazio_bte_dia');?>">
                                 <!----------Semanal-BTE----------------------------->
                                 <input type="hidden" id="bsvalorh" name="bsvalorh" value="<?php the_field('valorpotência€dia_contratada_bte_dia_copy');?>">
                                 <input type="hidden" id="bspotench" name="bspotench" value="<?php the_field('potência_horas_de_ponta_€kwh_bte_dia_copy');?>">
                                 <input type="hidden" id="bspontah" name="bspontah" value="<?php the_field('ponta_bte_dia_copy');?>">
                                 <input type="hidden" id="bschiah" name="bschiah" value="<?php the_field('cheia_bte_dia_copy');?>">
                                 <input type="hidden" id="bsvazioh" name="bsvazioh" value="<?php the_field('vazio_bte_dia_copy');?>">
                                 <input type="hidden" id="bssuperh" name="bssuperh" value="<?php the_field('super_vazio_bte_dia_copy');?>">
                                <!----------Semanal-MT----------------------------->
                                 <input type="hidden" id="mdvalorh" name="mdvalorh" value="<?php the_field('valorpotência€dia_contratada_mt_dia');?>">
                                 <input type="hidden" id="mdpotench" name="mdpotench" value="<?php the_field('potência_horas_de_ponta_€kwh_mt_dia');?>">
                                 <input type="hidden" id="mdpontah" name="mdpontah" value="<?php the_field('ponta_mt_dia_');?>" >
                                 <input type="hidden" id="mdchiah" name="mdchiah" value="<?php the_field('cheia_mt_dia');?>">
                                 <input type="hidden" id="mdvazioh" name="mdvazioh" value="<?php the_field('vazio_mt_dia');?>">
                                 <input type="hidden" id="mdsuperh" name="mdsuperh" value="<?php the_field('super_vazio_mt_dia');?>">
                               <!----------Semanal-MT-optional----------------------------->
                                <input type="hidden" id="msvalorh" name="msvalorh" value="<?php the_field('valorpotência€dia_contratada_mt_dia_copy');?>">
                                 <input type="hidden" id="mspotench" name="mspotench" value="<?php the_field('potência_horas_de_ponta_€kwh_mt_dia_copy');?>">
                                 <input type="hidden" id="mspontah" name="mspontah" value="<?php the_field('ponta_mt_dia__copy');?>" >
                                 <input type="hidden" id="mschiah" name="mschiah" value="<?php the_field('cheia_mt_dia_copy');?>">
                                 <input type="hidden" id="msvazioh" name="msvazioh" value="<?php the_field('vazio_mt_dia_copy');?>">
                                 <input type="hidden" id="mssuperh" name="mssuperh" value="<?php the_field('super_vazio_mt_dia_copy');?>">
                                  <?php 
                                    }
                                    }       wp_reset_postdata();

                                  ?>
                              <!------------------------------------------------------------------------->
                              <div class="col-md-6 col-sm-6 preuni-ponta">
                                 <input type="text" id="preuni-ponta" class="all_fields preuni-ponta"  placeholder="Ponta €/Kwh"  name="precosunitarios-ponta"  >
                              </div>
                              <div class="col-md-6 col-sm-6 preuni-cheia">
                                 <input type="text" id="preuni-cheia" class="all_fields preuni-cheia"  placeholder="Cheia €/Kwh"  name="precosunitarios-cheia"  >
                              </div>
                              <div class="col-md-6 col-sm-6 preuni-vazio">
                                 <input type="text" id="preuni-vazio" class="all_fields preuni-vazio"  placeholder="Vazio €/Kwh"  name="precosunitarios-vazio"   >
                              </div>
                              <div class="col-md-6 col-sm-6 preuni-supervazio">
                                 <input type="text" id="preuni-supervazio" class="all_fields preuni-supervazio"  placeholder="Super Vazio"  name="precosunitarios-supervazio" >
                              </div>
                              <div class="col-md-6 col-sm-6 preuni-foravazio">
                                 <input type="text" id="preuni-foravazio" class="all_fields preuni-foravazio"  placeholder="Fora Vazio"  name="precosunitarios-foravazio"   >
                              </div>
                              <div class="col-md-6 col-sm-6 preuni-simple">
                                 <input type="text" id="preuni-simples"  class="all_fields preuni-simples"  placeholder="Simples €/Kwh"  name="precosunitarios-simples"   >
                              </div>
                              <div class="col-md-12">
                              <input type="button" name="next" class="next_btn" value="Próxima" />
                             <!--- <input type="submit" value="Submeter" class="simulatorsend"> --->

                              </div>
                              <div style="display: block;clear: both;"></div>
                               

                           </div>

                                <div class="fieldarea telecomunicacoes">
                                  
                                      <div class="col-md-6 col-sm-6">
                                        <input type="text" id="tel-valor-mensal" class="all_fields tel-valor-mensal"  placeholder="Valor mensal"  name="valormensal" >
                                       </div>
                                       <div class="col-md-6 col-sm-6">
                                        <input type="text" id="tel-ndetelemoveis" class="all_fields tel-ndetelemoveis"  placeholder="Nº de telemoveis"  name="ndetelemoveis"  >
                                       </div>
                                       <div class="col-md-6 col-sm-6">
                                        <input type="text" id="tel-dadosmoveis" class="all_fields tel-dadosmoveis"  placeholder="Dados moveis incluidos no pacote (em Gigas) "  name="dadosmoveis"  >
                                       </div>
                                       <div class="col-md-6 col-sm-6">
                                        <input type="text" id="tel-ndeminutosinnopa" class="all_fields tel-ndeminutosinnopa"  placeholder="Nº de minutos incluidos no pacote"  name="ndeminutosinnopa"  >
                                       </div>
                                       <div class="col-md-12">
                                       <input type="button" name="Anterior" class="pre_btn" value="Anterior" />
                                       <input type="button" name="Próxima" class="next_btn" value="Próxima" />
                                 <!---  <input type="submit" value="Submeter" class="simulatorsend">----->

                                        </div>
                                        <div style="display: block;clear: both;"></div>
                                         
                                </div>

                                <div class="fieldarea medicinano">
                                 
                                      <div class="col-md-6 col-sm-6">
                                        <input type="text"  id="medi-valoranualpor" class="all_fields medi-valoranualpor" placeholder="Valor anual por colaborador"  name="valoranualporcolaborador"  >
                                       </div>
                                       <div class="col-md-6 col-sm-6">
                                        <input type="text" id="medi-colaborado" class="all_fields medi-colaborado" placeholder="Nº colaboradores"  name="medincolaboradores"  >
                                       </div>
                                       <div class="col-md-12">
                                        <input type="button" name="Anterior" class="pre_btn" value="Anterior" />
                                       <input type="button" name="Próxima" class="next_btn" value="Próxima" />
                                  <!--- <input type="submit" value="Submeter" class="simulatorsend">------->

                                       
                                      </div>
                                      <div style="display: block;clear: both;"></div>
                                      
                                  
                                </div>
                                <div class="fieldarea saudenotrabalho">
                                 
                                 <div class="col-md-6 col-sm-6">
                                   <input type="text"  id="saude-valoranualpor" class="all_fields saude-valoranualpor" placeholder="Valor anual"  name="valoranualsaudeno"  >
                                  </div>
                                  <div class="col-md-6 col-sm-6">
                                   <input type="text" id="saude-netsableci" class="all_fields saude-netsableci" placeholder="Nº Establecimentos"  name="nestableciemen"  >
                                  </div>
                                  <div style="display: block;clear: both;"></div>
                                  <div class="col-md-12">
                                   <input type="button" name="Anterior" class="pre_btn" value="Anterior" />
                                       <input type="button" name="Próxima" class="next_btn" value="Próxima" />
                              <!---     <input type="submit" value="Submeter" class="simulatorsend"> --->

                                  
                                 </div>
                                 
                             
                           </div>
                              

                                <div class="fieldarea limpeza">
                                   
                                      <div class="col-md-6 col-sm-6">
                                        <input type="text" id="limp-valormensal" class="all_fields limp-valormensal"  placeholder="Valor mensal"  name="valormensallimeza" >
                                       </div>
                                       <div class="col-md-6 col-sm-6">
                                        <input type="text" id="limp-ndehoras" class="all_fields limp-ndehoras"  placeholder="Nº de horas mensais"  name="limpndehoras"  >
                                       </div>
                                       <div class="col-md-6 col-sm-6">
                                        <input type="hidden" id="limp-rateperhour" class="all_fields limp-rateperhour"  placeholder="rate per hour"  name="limprateperhour"  >
                                       </div>
                                       <div class="col-md-12">
                                         <input type="button" name="Anterior" class="pre_btn" value="Anterior" />
                                       <input type="button" name="Próxima" class="next_btn" value="Próxima" />
                                   <!---<input type="submit" value="Submeter" class="simulatorsend"> --------->

                                   </div>
                                  
                                </div>

                                <div class="fieldarea vigilancia">
                                 
                                <div class="col-md-6 col-sm-6">
                                        <input type="text" id="vigi-valormensal" class="all_fields vigi-valormensal"  placeholder="Valor mensal"  name="vigivalormensal" >
                                       </div>
                                       <div class="col-md-6 col-sm-6">
                                        <input type="text" id="vigi-ndehoras" class="all_fields vigi-ndehoras"  placeholder="Nº de horas mensais"  name="vigilimpndehoras"  >
                                       </div>
                                       <div class="col-md-6 col-sm-6">
                                        <input type="hidden" id="vigi-rateperhour" class="all_fields vigi-rateperhour"  placeholder="rate per hour"  name="vigilimprateperhour"  >
                                       </div>
                                       <div class="col-md-12">
                                        <input type="button" name="Anterior" class="pre_btn" value="Anterior" />
                                       <input type="button" name="Próxima" class="next_btn" value="Próxima" />
                                <!---   <input type="submit" value="Submeter" class="simulatorsend"> --->

                                 </div>
                                 <div style="display: block;clear: both;"></div>
                                
                                </div>
                                <div class="fieldarea consumiveisde">
                                 
                                 <div class="col-md-6 col-sm-6">
                                         <input type="text" id="consum-valormensal" class="all_fields consum-valormensal"  placeholder="Valor mensal"  name="vigivalormensal" >
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                         <input type="text" id="consum-ndehoras" class="all_fields consum-ndehoras"  placeholder="Nº de produtos referidos na fatura"  name="consumndeprodutos"  >
                                        </div>
                                      
                                        <div class="col-md-12">
                                         <input type="button" name="Anterior" class="pre_btn" value="Anterior" />
                                       <input type="button" name="Próxima" class="next_btn" value="Próxima" />
                                  <!--- <input type="submit" value="Submeter" class="simulatorsend">-->

                                  </div>
                                  <div style="display: block;clear: both;"></div>
                                   
                                 
                                 </div>
                                 <div class="fieldarea pragas">
                                 
                                 <div class="col-md-6 col-sm-6">
                                         <input type="text" id="pragas-valormensal" class="all_fields pragas-valorannual"  placeholder="Valor anual"  name="pragasvaloranual" >
                                        </div>
                                        <div class="col-md-6 col-sm-6 ">
                                         <select name="pragas-visitas" class="all_fields pragas-visitas">
                                        <option selected="true" disabled="disabled">Nº de visitas anuais</option>
                                        <?php
                                 $arg1 = array('post_type'  => 'simulator','p'=>'9858');
                                 $the_query1 = new WP_Query( $arg1 );
                                 if ( $the_query1->have_posts() ) {
                               while ( $the_query1->have_posts() ) {
                                $the_query1->the_post();
                                if( have_rows('nº_de_visitas_anuais') ):

                                  while ( have_rows('nº_de_visitas_anuais') ) : the_row();
                                 ?> 

                                        <option value="<?php the_sub_field('nª_visitas'); ?>"  ><?php the_sub_field('nª_visitas'); ?></option>
                                     
                                        <?php 
                                  endwhile;

                                endif;
                                    }
                                    }       wp_reset_postdata();

                                  ?>
                                        </select>  
                                      
                                        <?php
                                 $arg4 = array('post_type'  => 'simulator','p'=>'9858');
                                 $the_query4 = new WP_Query( $arg4 );
                                 if ( $the_query4->have_posts() ) {
                               while ( $the_query4->have_posts() ) {
                                $the_query4->the_post();
                                if( have_rows('nº_de_visitas_anuais') ):
                                   $i=1;
                                  while ( have_rows('nº_de_visitas_anuais') ) : the_row();
                                 ?> 
                                 <div id="btndrop<?php echo $i; ?>" >
                               <input  type="hidden"  class="valorbtn" name="yr[<?php the_sub_field('nª_visitas'); ?>][custo_anual]" value="<?php the_sub_field('custo_anual');?>">
                                                                     </div>
                                 <?php $i++;
                                  endwhile;

                                endif;
                                    }
                                    }       wp_reset_postdata(); ?>

                                        </div>
                                      
                                        <div class="col-md-12">
                                         <input type="button" name="Anterior" class="pre_btn" value="Anterior" />
                                       <input type="button" name="Próxima" class="next_btn" value="Próxima" />
                                   <!---<input type="submit" value="Submeter" class="simulatorsend">----->

                                  </div>
                                  <div style="display: block;clear: both;"></div>
                                 
                                 </div>

                                  
                                
                                <div class="fieldarea seguroautomovel">
                                <div class="col-md-6 col-sm-6">
                                  <input type="text" id="seguroauto-valormensal" class="all_fields seguroauto-valorannual"  placeholder="Valor anual do seguro (para o total de veículos)"  name="seguroautovaloranual" >
                                </div>
                                 <div class="col-md-6 col-sm-6">
                                   <input type="text" id="seguroauto-ndevei" class="all_fields seguroauto-ndevei"  placeholder="Nº de veículos"  name="seguroautondeveiculos" >
                                 </div>
                                 <div class="col-md-6 col-sm-6">
                                   <input type="text" id="seguroauto-capital" class="all_fields seguroauto-capital"  placeholder="Capital seguro (para o total de veículos)"  name="seguroautocapital" >
                                 </div>
                                
                                        <div class="col-md-6 col-sm-6 ">
                                         <select name="modalidade" class="all_fields aumodalidade">
                                        <option selected="true" disabled="disabled">Modalidade do seguro</option>
                                        <option value="danosproprios"> Danos Próprios</option>
                                        <option value="terceiros" > Terceiros</option>
                                         </select>  
                                        </div>
                                        <div class="col-md-12">
                  <input type="button" name="Anterior" class="pre_btn" value="Anterior" />
                <!---  <input type="submit" value="Submeter" class="simulatorsend">--------->

                                  </div>
                                  <div style="display: block;clear: both;"></div>
                                  
                                </div>
                               
                           
                        </form>
                             <div class="ratevalue">
                                <input  type="hidden" id="limpzanewrate" class="limpzanewrate" name="limpzanewrate" value="<?php the_field('rate_per_hour',9855);?>">                                
                                <input  type="hidden" id="viginewrat" class="viginewrat" name="viginewrate" value="<?php the_field('rate_per_hour',9856);?>"> 
                                <input  type="hidden" id="medivalannual" class="medivalannual" name="medivalannual" value="<?php the_field('valor_anual',9853);?>">                                
                                <input  type="hidden"  id ="sugvalannual" class="valorbtn" name="sugvalannual" value="<?php the_field('valor_anual',9854);?>"> 

                               </div>

                                           
                 <!-----------------------------outputtable--------------->
                 <div id="myModal" class="modal sim-newmodel">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
                 <div class="outputtable">
                   <h1>Poupança Anual Estimada</h1>
                     <table>
                        <tr>
                           <th></th>
                           <th>Situação atual (Anual)</th>
                           <th>Poupança Anual</th>
                           <th>% de redução</th>
                      </tr>
                      <tr class="electricity hide">
                        <td>Eletricidade</td>
                        <td class="electricity1"></td>
                        <td class="electricity2"></td>
                        <td class="electricity3"></td>
                      </tr> 
                      <tr class="telecommuni hide">
                        <td>Telecomunicações</td>
                        <td class="telecommuni1"></td>
                        <td class="telecommuni2"></td>
                        <td class="telecommuni3"></td>
                      </tr>
                      <tr class="Medicina hide">
                        <td>Medicina no Trabalho</td>
                        <td class="Medicina1"></td>
                        <td class="Medicina2"></td>
                        <td class="Medicina3"></td>
                      </tr>
                      <tr  class="seguran hide">
                        <td>Segurança no Trabalho</td>
                        <td class="seguran1"></td>
                        <td class="seguran2"></td>
                        <td class="seguran3"></td>
                      </tr>
                      <tr class="limpza hide">
                        <td>Limpeza</td>
                        <td class="limpza1"></td>
                        <td class="limpza2"></td>
                        <td class="limpza3"></td>
                      </tr>
                      <tr class="vig hide">
                        <td>Vigilância</td>
                        <td class="vig1"></td>
                        <td class="vig2"></td>
                        <td class="vig3"></td>
                      </tr>
                      <tr class="consum hide">
                        <td>Consumíveis de higiene e limpeza</td>
                        <td class="consum1"></td>
                        <td class="consum2"></td>
                        <td class="consum3"></td>
                      </tr>
                      <tr  class="pragass hide">
                        <td>Pragas</td>
                        <td class="pragas1"></td>
                        <td class="pragas2"></td>
                        <td class="pragas3"></td>
                      </tr>
                      <tr  class="seauto hide">
                        <td>Seguro automóvel</td>
                        <td class="seauto1"></td>
                        <td class="seauto2"></td>
                        <td class="seauto3"></td>
                      </tr>
                      <tr>
                        <td>Total</td>
                        <td class="total1"></td>
                        <td class="total2"></td>
                        <td class="total3"></td>
                      </tr>
                     </table>
                   </div>
                   </div>

</div>
                   <!------------------------------------->
                   <div style="display: block;clear: both;"></div>
                   <div class="submitrow">
                                <?php echo do_shortcode( '[contact-form-7 id="9918" title="Simular Confirmation"]' ); ?>
                                <a class="simulatorsend sim-new-btn">Submeter</a>
                                </div>
                      </div>
                  
                     

				</div>
			</div>
        </div>
    </div>

<script >

jQuery(document).on("click", ".simulatorcategory", function (e) { 
   // alert('simulclass');
    var cls1 = jQuery(this).attr('class').split(' ')[0];
 //   alert(cls1);
 
 jQuery('.fieldarea').removeClass("showblock");
  jQuery('.simulatorcategory').removeClass("showblock");

jQuery('.' + cls1).addClass('showblock');

 });


    jQuery(document).ready(function ()
     {
      document.getElementById("esiform").reset();
      function formatNumber (num) {
    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1, ")
}
   
      

// Get the modal
var modal = document.getElementById('myModal');
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];



            
var $first = jQuery('li:first', 'ul'),
    $last = jQuery('li:last', 'ul');

        jQuery(".next_btn").click(function(){     

         
          var $next, $selected = jQuery(".showblock");
$next = $selected.next('li').length ? $selected.next('li') : $first;
var cls1 = jQuery($next).attr('class').split(' ')[0];
            
$selected.removeClass("showblock");
jQuery('.fieldarea').removeClass("showblock");
$next.addClass('showblock');
jQuery('.fieldarea'+'.'+ cls1).addClass('showblock');
});
jQuery(".pre_btn").click(function(){     
             
          var $prev, $selected = jQuery(".showblock");
          $prev = $selected.prev('li').length ? $selected.prev('li') : $last;
var cls2 = jQuery($prev).attr('class').split(' ')[0];
         
$selected.removeClass("showblock");
jQuery('.fieldarea').removeClass("showblock");
$prev.addClass('showblock');
jQuery('.fieldarea'+'.'+ cls2).addClass('showblock');
});
jQuery(".preuni-simple").css("display", "none");

jQuery(".consumo-simples").css("display", "none");

      jQuery('.ciclo').on('change',function(){
        
        var elec1 = jQuery('.niveldetensao').val();
        var elec6 = jQuery('.btn-cic').val();
               
        if( elec6=='tri-horario' && elec1 == 'btn')
           {
            jQuery(".consumo-cheia").css("display", "block");
             jQuery(".consumo-ponta").css("display", "block");
             jQuery(".consumo-vazio").css("display", "block");
             jQuery(".preuni-vazio").css("display", "block");
             jQuery(".preuni-ponta").css("display", "block");
             jQuery(".preuni-cheia").css("display", "block");
             jQuery(".consumo-simples").css("display", "none");
             jQuery(".preuni-foravazio").css("display", "none");
             jQuery(".consumo-foravazio").css("display", "none");
             jQuery(".preuni-simple").css("display", "none");
           }
           if( elec6=='simples' && elec1 == 'btn')
           {
            jQuery(".consumo-vazio").css("display", "none");
             jQuery(".preuni-vazio").css("display", "none");
            jQuery(".consumo-simples").css("display", "block");
            jQuery(".preuni-simple").css("display", "block");
            jQuery(".consumo-cheia").css("display", "none");
             jQuery(".consumo-ponta").css("display", "none");
             jQuery(".preuni-foravazio").css("display","none");
            
            
           }
           if( elec6=='bi-diario' && elec1 == 'btn')
           {
               jQuery(".preuni-simple").css("display", "none");
            jQuery(".consumo-foravazio").css("display", "block");
            jQuery(".consumo-vazio").css("display", "block");
            jQuery(".preuni-foravazio").css("display", "block");
            Query(".preuni-simple").css("display", "none");
            jQuery(".consumo-simples").css("display", "none");
            jQuery(".consumo-cheia").css("display", "none");
             jQuery(".consumo-ponta").css("display", "none");
            
           }
      });
       jQuery('.niveldetensao').on('change',function(){
        var elec1 = jQuery('.niveldetensao').val();
        var elec6 = jQuery('.btn-cic').val();
        if( elec1=='btn')
           {
            jQuery(".pontenciah").css("display", "none");
            jQuery(".consumo-simples").css("display", "none");
            jQuery(".consumo-supervazio").css("display", "none");
            jQuery(".preuni-supervazio").css("display", "none");
            jQuery(".preuni-vazio").css("display", "none");
            jQuery(".potencia-kwh").css("display", "none");
             jQuery(".preuni-ponta").css("display", "none");
             jQuery(".preuni-cheia").css("display", "none");
            jQuery(".consumo-vazio").css("display", "none");
               jQuery(".mt-perio").css("display", "none");
            jQuery(".bte-perio").css("display", "none");
            jQuery(".pontenciah").css("display", "none");
             jQuery(".bte-mt").css("display", "none");
            jQuery(".peirodicidade").css("display", "none");
             jQuery(".consumohora").css("display", "none");
             jQuery(".consumo-supervazio").css("display", "none");
             jQuery(".consumo-cheia").css("display", "none");
             jQuery(".consumo-ponta").css("display", "none");
             jQuery(".btn-drop").css("display", "block");
             jQuery(".ciclo").css("display", "block");             
           }
           else if(elec1=='bte' || elec1=='mt' )
           {
               
               jQuery(".preuni-simple").css("display", "none");

jQuery(".consumo-simples").css("display", "none");
           jQuery(".pontenciah").css("display", "block");
            jQuery(".consumo-simples").css("display", "none");
            jQuery(".ciclo").css("display", "none");
            jQuery(".btn-drop").css("display", "none");
            jQuery(".bte-mt").css("display", "block");
             jQuery(".consumohora").css("display", "block");
             jQuery(".consumo-supervazio").css("display", "block");
             jQuery(".consumo-cheia").css("display", "block");
             jQuery(".consumo-ponta").css("display", "block");
             jQuery(".consumo-vazio").css("display", "block");
             jQuery(".consumo-supervazio").css("display", "block");
             jQuery(".potencia-kwh").css("display", "block");
             jQuery(".preuni-ponta").css("display", "block");
             jQuery(".preuni-cheia").css("display", "block");
             jQuery(".preuni-vazio").css("display", "block");
             jQuery(".preuni-supervazio").css("display", "block");
                        // jQuery(".preuni-simple").css("display", "none);
                           //  jQuery(".consumo-simples").css("display", "none");

             
           }
         

          if( elec1=='bte')
          {
            jQuery(".pontenciah").css("display", "block");
            jQuery(".mt-perio").css("display", "none");
            jQuery(".bte-perio").css("display", "block");

          }
          if( elec1=='mt')
          {
            jQuery(".pontenciah").css("display", "block");
            jQuery(".bte-perio").css("display", "none");
            jQuery(".mt-perio").css("display", "block");
          }
         

      }); 
       
       jQuery(document).on("change", ".ndiasdafatura", function (e) { 
        var elec7 = jQuery("#ndiasdafatura").val();
        
          if( elec7 == 0 )
          {
           // jQuery(".pontenciah").css("display", "block");
            
          }
          else if( elec7 > 0 )
          {
           // jQuery(".pontenciah").css("display", "none");
          }

        });

        jQuery(document).on("click", ".simulatorsend", function (e) { 
          jQuery('#wpcf7-f9918-o1 form.wpcf7-form').find('.wpcf7-submit').trigger( "submit" ); 
         // modal.style.display = "block";
          var elec1 = jQuery('.niveldetensao').val() || 0;
          var elecc = jQuery('.peirodicidade').val();
          var btndrop=jQuery('.btn-drop').val() || 0;
        var elec6 = jQuery('.btn-cic').val() || 0;
        var elec2 = jQuery("#bte-mt").val() || 0;       
        var elec7 = jQuery("#ndiasdafatura").val() || 0 ;
        var elec8 = jQuery("#consumohora").val() || 0;
        var elec9 = jQuery("#pontenciah").val() || 0 ;
        var elec10 = (jQuery("#consumo-ponta").val() || 0);
       var elec11 = (jQuery("#consumo-cheia").val() || 0);
        var elec12 = (jQuery("#consumo-vazio").val() || 0);
        var elec13 = (jQuery("#consumo-supervazio").val() || 0);
        var elec14 = (jQuery("#consumo-foravazio").val() || 0);
        var elec15 = (jQuery("#consumo-simples").val() || 0);
        var elec16 = jQuery("#valor-potencia").val() || 0;
        var elec17 = jQuery("#potencia-kwh").val() || 0;
        var elec18 = jQuery("#preuni-ponta").val() || 0;
        var elec19 = jQuery("#preuni-cheia").val() || 0;
        var elec20 = jQuery("#preuni-vazio").val() || 0;
        var elec21 = jQuery("#preuni-supervazio").val() || 0;
        var elec22 = jQuery("#preuni-foravazio").val() || 0;
        var elec23 = jQuery("#preuni-simples").val() || 0;
        var elecbtnd = jQuery('.btnn').val() || 0; 
         //alert(elecbtnd);
      // alert(elec10 +'-'+elec11+'-'+elec12+'-'+elec13);
      var elevalnew=  0;
          var elepohoranew = 0;
        var eleprepon = 0;       
        var elepreche = 0;
        var eleprevaz = 0;
        var elepresup =  0;

        
        var btnvaler= jQuery('input[type=hidden][name="btn['+elecbtnd+'][valor]"]').val() || 0 ;
        //alert(btnvaler);
              var btnsimple=   0 ;
              var btnbihorafo= 0 ;
              var btnbivazio= 0 ;
              var btntriponta=  0 ;
              var btntrichia=  0 ;
              var btntrivazio=  0 ;
             
      
        if(elec1=='btn' && elec6=='tri-horario')
        {
          var btntriponta=  jQuery('input[type=hidden][name="btn['+elecbtnd+'][triponta]"]').val() || 0 ;
              var btntrichia=  jQuery('input[type=hidden][name="btn['+elecbtnd+'][trichia]"]').val() || 0 ;
              var btntrivazio= jQuery('input[type=hidden][name="btn['+elecbtnd+'][trivazio]"]').val() || 0 ;
              elec8 =0;

        }
       
       if(elec1=='btn' && elec6=='bi-diario')
        {
          var btnbihorafo=jQuery('input[type=hidden][name="btn['+elecbtnd+'][bihorafo]"]').val() || 0 ;
              var btnbivazio=  jQuery('input[type=hidden][name="btn['+elecbtnd+'][bivazio]"]').val() || 0 ;
              elec8 =0;

        }
        if( elec6=='simples' && elec1 == 'btn')
           {
            elec8 =0;
            var btnsimple=  jQuery('input[type=hidden][name="btn['+elecbtnd+'][simple]"]').val() || 0 ;
           }
// alert(btnsimple);
//===================ponta

        if(elec1=='bte' && elecc == 'diario')
        {
          var elevalnew=  jQuery("#bvalorh").val() || 0;
          var elepohoranew = jQuery("#bpotench").val() || 0;
        var eleprepon = jQuery("#bpontah").val() || 0;       
        var elepreche = jQuery("#bchiah").val() || 0;
        var eleprevaz = jQuery("#bvazioh").val() || 0;
        var elepresup = jQuery("#bsuperh").val() || 0;
    
        }
        else if(elec1=='bte'&& elecc == 'semanal')
        {
          var elevalnew=  jQuery("#bsvalorh").val() || 0;
          var elepohoranew = jQuery("#bspotench").val() || 0;
        var eleprepon = jQuery("#bspontah").val() || 0;       
        var elepreche = jQuery("#bschiah").val() || 0;
        var eleprevaz = jQuery("#bsvazioh").val() || 0;
        var elepresup = jQuery("#bssuperh").val() || 0;
        }
        
        else if(elec1=='mt'&& elecc == 'semanal')
        {
          var elevalnew=  jQuery("#mdvalorh").val() || 0;
          var elepohoranew = jQuery("#mdotench").val() || 0;
        var eleprepon = jQuery("#mdpontah").val() || 0;       
        var elepreche = jQuery("#mdchiah").val() || 0;
        var eleprevaz = jQuery("#mdvazioh").val() || 0;
        var elepresup = jQuery("#mdsuperh").val() || 0;
        }
        else if(elec1=='mt'&& elecc == 'semanal-opcional')
        {
          var elevalnew=  jQuery("#msvalorh").val() || 0;
          var elepohoranew = jQuery("#mspotench").val() || 0;
        var eleprepon = jQuery("#mspontah").val() || 0;       
        var elepreche = jQuery("#mschiah").val() || 0;
        var eleprevaz = jQuery("#msvazioh").val() || 0;
        var elepresup = jQuery("#mssuperh").val() || 0;
        }
    //--------------------------for btn


    //------------------------------------
     
var  newmonthlyvalue=0;
var calnew=0;
var totalcalnw= 0;
        var  sumproductelectricty=0;
        var totalesti= 0;
        var newtotalesti= 0;
        var Situaelecttricity=0;
        var Poupancaannualelectricity=0;
        if(elec1 == 'btn')
               {
                    calnew = elec16 * elec7;
                    totalcalnw= elevalnew * elec7;
               }
               else
               {
                    calnew = elec16 * elec7 * elec2;
                    totalcalnw= elevalnew * elec7 * elec2;
               }
         if(elec8 >0 )
         {
            newmonthlyvalue = parseFloat(elec10 * elec18)+ parseFloat(elec11 * elec19) + parseFloat(elec12 * elec20) + parseFloat(elec13 * elec21)+parseFloat( elec14 * elec22) +parseFloat( elec15 *elec23) +parseFloat(calnew)+parseFloat(elec9 *elec17*elec7);
            newtotalesti = parseFloat(elec10 * eleprepon )+ parseFloat(elec11 * elepreche) + parseFloat(elec12 * eleprevaz) + parseFloat(elec13 * elepresup) + parseFloat(elec14 * elec22) + parseFloat(elec15 *elec23 )+parseFloat(totalcalnw) +parseFloat(elec9*elepohoranew*elec7);

     sumproductelectricty = parseFloat(elec10 * elec18)+ parseFloat(elec11 * elec19) + parseFloat(elec12 * elec20) + parseFloat(elec13 * elec21 )+parseFloat( elec14 * elec22) +parseFloat( elec15 *elec23) +parseFloat(( elec16 * elec2)* elec7 )+parseFloat((elec10/elec8)*elec17*elec7);
     totalesti = parseFloat(elec10 * eleprepon )+ parseFloat(elec11 * elepreche) + parseFloat(elec12 * eleprevaz) + parseFloat(elec13 * elepresup) + parseFloat(elec14 * elec22) + parseFloat(elec15 *elec23 )+parseFloat(( elevalnew * elec2)* elec7) +parseFloat((elec10/elec8)*elepohoranew*elec7);

         }
         else
         {
          
          if(elec1=='btn' && elec6=='tri-horario')
        {
        
        newmonthlyvalue = parseFloat(elec10 * elec18)+ parseFloat(elec11 * elec19) + parseFloat(elec12 * elec20) + parseFloat(elec13 * elec21)+parseFloat( elec14 * elec22) +parseFloat( elec15 *elec23) +parseFloat(calnew)+parseFloat(elec9 *elec17*elec7);
            newtotalesti = parseFloat(elec10 * btntriponta )+ parseFloat(elec11 * btntrichia) + parseFloat(elec12 * btntrivazio) + parseFloat(elec13 * elepresup) + parseFloat(elec14 * elec22) + parseFloat(elec15 *elec23 )+parseFloat(totalcalnw) +parseFloat(elec9*elepohoranew*elec7);

              sumproductelectricty =   parseFloat(elec10 * elec18)+ parseFloat(elec11 * elec19) + parseFloat(elec12 * elec20)+parseFloat(( elec16 * btndrop)* elec7 )+parseFloat(elec9 * elec7);
              totalesti = parseFloat(elec10 * btntriponta )+ parseFloat(elec11 * btntrichia) + parseFloat(elec12 * btntrivazio) +parseFloat(( btnvaler * btndrop)* elec7) +parseFloat(elec9 * elec7);
                  }
        else  if(elec1=='btn' && elec6=='bi-diario')
        {
newmonthlyvalue = parseFloat(elec10 * elec18)+ parseFloat(elec11 * elec19) + parseFloat(elec12 * elec20) + parseFloat(elec13 * elec21)+parseFloat( elec14 * elec22) +parseFloat( elec15 *elec23) +parseFloat(calnew)+parseFloat(elec9 *elec17*elec7);
            newtotalesti = parseFloat(elec10 * eleprepon )+ parseFloat(elec11 * elepreche) + parseFloat(elec12 * btntrivazio) + parseFloat(elec13 * elepresup) + parseFloat(elec14 * btnbihorafo) + parseFloat(elec15 *elec23 )+parseFloat(totalcalnw) +parseFloat(elec9*elepohoranew*elec7);

              sumproductelectricty =   parseFloat(elec14 * elec22) + parseFloat(elec12 * elec20) +parseFloat(( elec16 * btndrop)* elec7 )+parseFloat(elec9 *elec7);
              totalesti =  parseFloat(elec14 * btnbihorafo) + parseFloat(elec12 * btntrivazio) +parseFloat(( btnvaler * btndrop)* elec7) +parseFloat(elec9 * elec7);


        }
       else  if( elec6=='simples' && elec1 == 'btn')
           {
                newmonthlyvalue = parseFloat(elec10 * elec18)+ parseFloat(elec11 * elec19) + parseFloat(elec12 * elec20) + parseFloat(elec13 * elec21)+parseFloat( elec14 * elec22) +parseFloat( elec15 *elec23) +parseFloat(calnew)+parseFloat(elec9 *elec17*elec7);
            newtotalesti = parseFloat(elec10 * eleprepon )+ parseFloat(elec11 * elepreche) + parseFloat(elec12 * eleprevaz) + parseFloat(elec13 * elepresup) + parseFloat(elec14 * elec22) + parseFloat(elec15 *btnsimple )+parseFloat(totalcalnw) +parseFloat(elec9*elepohoranew*elec7);

           
            sumproductelectricty =   parseFloat(elec15 * elec23) + +parseFloat(( elec16 * btndrop)* elec7 )+parseFloat(elec9 *elec7);
              totalesti =  parseFloat(elec15 * btnsimple) +  +parseFloat(( btnvaler * btndrop)* elec7) +parseFloat(elec9 * elec7);

           }
           else if(elec1=='mt'&& elecc == 'semanal')
           {
                newmonthlyvalue = parseFloat(elec10 * elec18)+ parseFloat(elec11 * elec19) + parseFloat(elec12 * elec20) + parseFloat(elec13 * elec21)+parseFloat( elec14 * elec22) +parseFloat( elec15 *elec23) +parseFloat(calnew)+parseFloat(elec9 *elec17*elec7);
            newtotalesti = parseFloat(elec10 * eleprepon )+ parseFloat(elec11 * elepreche) + parseFloat(elec12 * eleprevaz) + parseFloat(elec13 * elepresup) + parseFloat(elec14 * elec22) + parseFloat(elec15 *btnsimple )+parseFloat(totalcalnw) +parseFloat(elec9*elepohoranew*elec7);

           
        
           }
             else if(elec1=='mt'&& elecc == 'semanal-opcional')
           {
                newmonthlyvalue = parseFloat(elec10 * elec18)+ parseFloat(elec11 * elec19) + parseFloat(elec12 * elec20) + parseFloat(elec13 * elec21)+parseFloat( elec14 * elec22) +parseFloat( elec15 *elec23) +parseFloat(calnew)+parseFloat(elec9 *elec17*elec7);
            newtotalesti = parseFloat(elec10 * eleprepon )+ parseFloat(elec11 * elepreche) + parseFloat(elec12 * eleprevaz) + parseFloat(elec13 * elepresup) + parseFloat(elec14 * elec22) + parseFloat(elec15 *btnsimple )+parseFloat(totalcalnw) +parseFloat(elec9*elepohoranew*elec7);

           }
           else{
               
                        
           newmonthlyvalue = parseFloat(elec10 * elec18)+ parseFloat(elec11 * elec19) + parseFloat(elec12 * elec20) + parseFloat(elec13 * elec21)+parseFloat( elec14 * elec22) +parseFloat( elec15 *elec23) +parseFloat(calnew)+parseFloat(elec9 *elec17*elec7);
            newtotalesti = parseFloat(elec10 * eleprepon )+ parseFloat(elec11 * elepreche) + parseFloat(elec12 * eleprevaz) + parseFloat(elec13 * elepresup) + parseFloat(elec14 * elec22) + parseFloat(elec15 *elec23 )+parseFloat(totalcalnw) +parseFloat(elec9*elepohoranew*elec7);
          sumproductelectricty = parseFloat(elec10 * elec18)+ parseFloat(elec11 * elec19) + parseFloat(elec12 * elec20) + parseFloat(elec13 * elec21 )+parseFloat( elec14 * elec22) +parseFloat( elec15 *elec23) +parseFloat(( elec16 * elec2)* elec7 )+parseFloat(elec9 *elec17*elec7);
          totalesti = parseFloat(elec10 * eleprepon )+ parseFloat(elec11 * elepreche) + parseFloat(elec12 * eleprevaz) + parseFloat(elec13 * elepresup) + parseFloat(elec14 * elec22) + parseFloat(elec15 *elec23 )+parseFloat(( elevalnew * elec2)* elec7) +parseFloat(elec9*elepohoranew*elec7);
           }
         }
        
   
       
var s1= sumproductelectricty.toFixed(2);
var s2 =totalesti.toFixed(2); 
     Situaelecttricity =sumproductelectricty*12;
    var Situaelecttricity1 = Math.round(Situaelecttricity);
     Poupancaannualelectricity =Math.abs((sumproductelectricty-totalesti)*12);
    //alert(elecc + '_' + elec1);
//alert('elec10 - '+elec10 +' elec18 '+ elec18+' elec11- '+elec11 +'elec19 '+ elec19+' elec12 -'+elec12 +'elec20 '+ elec20+'elec13-'+elec13 +' elec21 '+ elec21+' elec14 -'+elec14 + ' elec22 '+ elec22+' elec15- '+elec15 +' elec23 '+elec23+'-calnew '+calnew + '-elec9 *elec17*elec7'+ elec9 *elec17*elec7);
//alert('eleprepon'+eleprepon+'elepreche'+elepreche+'eleprevaz'+ eleprevaz + 'elepresup'+elepresup);
//alert('newmonthlyvalue' + newmonthlyvalue);
//  alert('newtoatalanuaaly'+ newtotalesti);
     var newannualvalue =0;
      newannualvalue = newmonthlyvalue *12;
      var newtotalestivalue =0;
      newtotalestivalue = newtotalesti*12;
      
       var newpopucanaanual =0;
       newpopucanaanual= (newmonthlyvalue-newtotalesti)*12;
    //   alert(eleprepon +''+);
       //alert(newpopucanaanual);
  //   alert(sumproductelectricty + '-' +totalesti)
  // alert(sumproductelectricty+'-'+s1);
   // alert(totalesti+'-'+s2);
   // alert(elepreche);
    //alert((sumproductelectricty-totalesti)*12);
     //------------------------telecomunnicatio
     var tele1=jQuery("#tel-valor-mensal").val() || 0;
     var tele2=jQuery("#tel-ndetelemoveis").val() || 0;
     var tele3=jQuery("#tel-dadosmoveis").val() || 0;
     var tele4=jQuery("#tel-ndeminutosinnopa").val() || 0;
     var teletotalactual =0;
     var teletotalestmido=0;
     var telepoupan=0;
     var teleannual =0;
      teletotalactual= parseFloat(tele1) ;
      teletotalestmido = teletotalactual -(teletotalactual*(29/100));
      telepoupan= (teletotalactual- teletotalestmido )*12;
      teleannual = teletotalactual*12;
      //-------------------------medicina
      var medi1=jQuery("#medi-valoranualpor").val() || 0;
     var medi2=jQuery("#medi-colaborado").val() || 0;
     var medi3 = jQuery("#medivalannual").val() || 0;
     var meditotalactual =0;
     var meditotalestmido=0;
     var medipoupan=0
     meditotalactual= parseFloat(medi1) *parseFloat(medi2);
      meditotalestmido = parseFloat(medi2) * medi3;
      medipoupan= meditotalactual- meditotalestmido;
      
      //------------------------------------------Segurança  no Trabalho
      var segu1=jQuery("#saude-valoranualpor").val() || 0;
     var segu2=jQuery("#saude-netsableci").val() || 0;
     var segu3=jQuery("#sugvalannual").val() || 0;
     var segutotalactual =0;
     var segutotalestmido=0;
     var segupoupan=0
   
     segutotalactual = segu1 * segu2;
     segutotalestmido = parseFloat(segu2) * segu3;
     segupoupan= segutotalactual- segutotalestmido;
       
//---------------------------------------limpza
var limp1=jQuery("#limp-valormensal").val() || 0;
     var limp2=jQuery("#limp-ndehoras").val() || 0;
    var limp3=jQuery("#limpzanewrate").val() || 0;
     var limptotalactual =0;
     var limptotalestmido=0;
     var limppoupan=0
     limptotalactual= parseFloat(limp1);
     limptotalestmido = parseFloat(limp2) * limp3 ;
     limppoupan= (limptotalactual- limptotalestmido)*12;
//---------------------------------------vigi
var vig1=jQuery("#vigi-valormensal").val() || 0;
     var vig2=jQuery("#vigi-ndehoras").val() || 0;
    var vig3=jQuery("#viginewrat").val() || 0;
     var vigtotalactual =0;
     var vigtotalestmido=0;
     var vigpoupan=0
     vigtotalactual= vig1;
     vigtotalestmido = vig2 * vig3;
     vigpoupan= (vigtotalactual- vigtotalestmido)*12;
//---------------------------------------consumo
var con1=jQuery("#consum-valormensal").val() || 0;
     var con2=jQuery("#consum-ndehoras").val() || 0;
  
     var contotalactual =0;
     var contotalestmido=0;
     var conpoupan=0
    var par2new =0
     contotalactual= con1;
     contotalestmido = contotalactual -(contotalactual*(35.1/100));
     conpoupan= (contotalactual- contotalestmido)*12;
     //---------------------------------------pragas
var par1=jQuery("#pragas-valormensal").val() || 0;
     var par2=jQuery(".pragas-visitas").val();
     
     var par2new =  jQuery('input[type=hidden][name="yr['+par2+'][custo_anual]"]').val() || 0 ;
  
     var partotalactual =0;
     var partotalestmido=0;
     var parpoupan=0
     partotalactual= par1;
     partotalestmido =  par2new;
     parpoupan= partotalactual - partotalestmido;
     //---------------------------------------seguauto
var seauto1=jQuery("#seguroauto-valormensal").val() || 0;
     var seauto2=jQuery("#seguroauto-ndevei").val() || 0;
     var seauto3=jQuery("#seguroauto-capital").val() || 0;
     var seauto4=jQuery(".aumodalidade").val();
  
     var seautotalactual =0;
     var seautotalestmido=0;
     var seautopoupan=0
     seautotalactual= seauto1;
     seautotalestmido = seautotalactual -(seautotalactual*(7.5/100));
     seautopoupan= seautotalactual- seautotalestmido;


      //sumproductelectricty =(1.15*90+3556*3559+.0099*1500+0.0690*3358 +(1500/90)*1500*0.0690);
         // var elec2 = jQuery('.bte-mt').value;
            var electcentage = 0;
       if(newannualvalue == 0 || newpopucanaanual == 0)
       {
           electcentage =0;
       }
       else{
           jQuery('.electricity').removeClass('hide');
          
      electcentage = Math.round( (newpopucanaanual/newannualvalue)*100) ; }
     
       jQuery('.outputtable').css("display","block");
       jQuery('.electricity1').text(formatNumber(Math.round(newannualvalue))+' €');
       jQuery('.electricity2').text(formatNumber(Math.round(newpopucanaanual))+' €');
       jQuery('.electricity3').text(electcentage +' %');
       //---------------------tele
       var telpercentage = 0;
       if(teleannual == 0 || telepoupan == 0)
       {
           telpercentage =0;
       }
       else{
              jQuery('.telecommuni').removeClass('hide');
          
      telpercentage = Math.round((telepoupan/teleannual)*100); }
       jQuery('.telecommuni1').text(formatNumber(teleannual)+' €');
       jQuery('.telecommuni2').text(formatNumber(Math.round(telepoupan))+' €');
       jQuery('.telecommuni3').text(telpercentage +' %');
       //------------------------------medi
         var medipercentage = 0;
       if(meditotalactual == 0 || medipoupan == 0)
       {
           medipercentage =0;
       }
       else{
           jQuery('.Medicina').removeClass('hide');
         
      medipercentage = Math.round((medipoupan/meditotalactual)*100); }
           
       jQuery('.Medicina1').text(formatNumber(meditotalactual)+' €');
       jQuery('.Medicina2').text(formatNumber(Math.round(medipoupan))+' €');
       jQuery('.Medicina3').text( medipercentage+' %');
          //------------------------------------------Segurança  no Trabalho
              var segupercentage = 0;
       if(segutotalactual == 0 || segupoupan == 0)
       {
           segupercentage =0;
       }
       else{
                jQuery('.seguran').removeClass('hide');
          
      segupercentage = Math.round((segupoupan/segutotalactual)*100); }
          jQuery('.seguran1').text(formatNumber(segutotalactual)+' €');
       jQuery('.seguran2').text(formatNumber(Math.round(segupoupan))+' €');
       jQuery('.seguran3').text( segupercentage +' %');
              //------------------------------------------limpza
                var limppercentage = 0;
       if(limptotalactual == 0 || limppoupan == 0)
       {
           limppercentage =0;
       }
       else{
             jQuery('.limpza').removeClass('hide');
         
     limppercentage = Math.round((limppoupan /(limptotalactual*12))*100); 
     }
     
              jQuery('.limpza1').text(formatNumber(limptotalactual*12)+' €');
       jQuery('.limpza2').text( formatNumber(Math.round(limppoupan))+' €');
       jQuery('.limpza3').text(limppercentage +' %');
                 //------------------------------------------vig
                  var vigpercentage = 0;
       if(vigtotalactual == 0 || vigpoupan == 0)
       {
           vigpercentage =0;
       }
       else{
           jQuery('.vig').removeClass('hide');
           
     vigpercentage = Math.round((vigpoupan /(vigtotalactual*12))*100); 
     }
                 jQuery('.vig1').text(formatNumber(vigtotalactual*12) +' €');
       jQuery('.vig2').text(formatNumber(Math.round(vigpoupan))+' €');
       jQuery('.vig3').text( vigpercentage+' %');
       //----------------------consumo
        var conspercentage = 0;
       if(contotalactual == 0 || conpoupan == 0)
       {
           conspercentage =0;
       }
       else{
                      jQuery('.consum').removeClass('hide');
         
     conspercentage =Math.round((conpoupan/(contotalactual*12))*100); 
     }

                  jQuery('.consum1').text(formatNumber(contotalactual*12)+' €');
       jQuery('.consum2').text(formatNumber(Math.round(conpoupan)) +' €');
       jQuery('.consum3').text( conspercentage +' %');

       //----------------------pragas
       var pragpercentage = 0;
       if(par1 == 0 || parpoupan == 0)
       {
           pragpercentage =0;
       }
       else{
                                 jQuery('.pragass').removeClass('hide');
              pragpercentage = Math.round((parpoupan/par1)*100); 
     }
                  jQuery('.pragas1').text(formatNumber(par1)+' €');
       jQuery('.pragas2').text(formatNumber(Math.round(parpoupan))+' €');
       jQuery('.pragas3').text( pragpercentage +' %');
     //----------------------seauto
      var seaugpercentage = 0;
       if(seautotalactual == 0 || seautopoupan == 0)
       {
           seaugpercentage =0;
       }
       else{
           jQuery('.seauto').removeClass('hide');
       
     seaugpercentage = Math.round((seautopoupan/seautotalactual)*100) ; 
     }
     jQuery('.seauto1').text(formatNumber(seautotalactual)+' €');
       jQuery('.seauto2').text(formatNumber(Math.round(seautopoupan))+' €');
       jQuery('.seauto3').text(seaugpercentage +' %');
         //----------------------total
         var toal1=0;
         var toatl2=0;
         var total3=0;
        
         total1= parseFloat(newannualvalue) + parseFloat(teleannual) + parseFloat(meditotalactual) +parseFloat(segutotalactual) +parseFloat(limptotalactual*12) +parseFloat(vigtotalactual*12) +parseFloat(contotalactual*12) +parseFloat(par1) + parseFloat(seautotalactual);
         total2= parseFloat(seautopoupan) + parseFloat(parpoupan) + parseFloat(conpoupan) + parseFloat(vigpoupan) + parseFloat(limppoupan) +parseFloat(segupoupan) +parseFloat(medipoupan) +parseFloat(telepoupan) +parseFloat(newpopucanaanual);
   //  alert(total1 / total2);
     if(total1 ==0 && total2 == 0)
     {
         total3 =0;
         }
         else
         {
      total3= Math.round((total2/total1)*100);
         }
     jQuery('.total1').text(formatNumber(Math.round(total1))+' €');
       jQuery('.total2').text(formatNumber(Math.round(total2))+' €');
       jQuery('.total3').text(total3 +' %');

return false;
        });
  

    });
    // When the user clicks on <span> (x), close the modal
    jQuery(document).on("click", ".close", function (e) { 
      var modal = document.getElementById('myModal');

    modal.style.display = "none";
    document.getElementById("esiform").reset();
});


</script>        


<?php get_footer(); ?>
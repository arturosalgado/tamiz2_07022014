<div class="row"><div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">        <h1 class="page-title txt-color-blueDark">                <i class="fa fa-table fa-fw "></i>                         Catalogos                 <span>>                         Unidades                </span>        </h1></div></div><!-- widget grid --><section id="widget-grid" class=""><!-- row --><div class="row">        <!-- NEW WIDGET START -->        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">                <!-- Widget ID (each widget will need unique ID)-->                <div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false">                        <!-- widget options:                        usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">                        data-widget-colorbutton="false"                        data-widget-editbutton="false"                        data-widget-togglebutton="false"                        data-widget-deletebutton="false"                        data-widget-fullscreenbutton="false"                        data-widget-custombutton="false"                        data-widget-collapsed="true"                        data-widget-sortable="false"                        -->                        <header>                                <span class="widget-icon"> <i class="fa fa-table"></i> </span>                                <h2>Unidades</h2>                        </header>                        <!-- widget div-->                        <div>                                <!-- widget edit box -->                                <div class="jarviswidget-editbox">                                        <!-- This area used as dropdown edit box -->                                </div>                                <!-- end widget edit box -->                                <!-- widget content -->                                <div class="widget-body no-padding">                                        <div class="widget-body-toolbar">                                            <a href="<?php echo $record->newLink(); ?>" class="btn btn-default">Agregar Nuevo</a>                                          </div>                                        <table id="dt_basic" class="table table-striped table-bordered table-hover">                                                <thead>                                                        <tr>                                                                <th>ID</th>                                                                <th>Nombre del Estado</th>                                                                <th>Estatus</th>                                                        </tr>                                                </thead>                                                <tbody>                                                <?php foreach($all as $record): ?>	                                                        <tr>                                                            <td><a href="<?php echo site_url("/tamiz/form/{$record->id}") ?>"  ><?php echo $record->id; ?></a></td>                                                                                                                             <td><a href="<?php echo $record->editLink(); ?>"  ><?php echo $record->nombre_completo() ?> </a></td>                                                                <td><?php echo $record->estatus;?></td>                                                        </tr>                                                <?php endforeach;?>                                                        </tbody>                                        </table>                                </div>                                <!-- end widget content -->                        </div>                        <!-- end widget div -->                </div>                <!-- end widget -->        </article>        <!-- WIDGET END --></div><!-- end row --></section>				<!-- end widget grid -->
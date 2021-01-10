@extends('layouts.master')
@section('content')

                    <!-- Page content -->
                    <div id="page-content">
                        <div class="content-header">
                            <div class="header-section">
                                <div class="row">
									<div class="col-md-9">
										<h1><strong>Usuarios:</strong> Listado</h1>
									</div>
									<div class="col-md-3 text-right">
										<a href="perfil-nuevo.php" class="btn btn-primary">Nueva Usuario</a>
									</div>
								</div>
                            </div>
                        </div>
                        <div class="block full">
                            <div class="table-responsive">
                                <table id="perfil-listado" class="table table-vcenter table-condensed table-bordered table-hover">
                                    <thead>
                                        <tr>
											<th>#</th>
                                            <th>TIPO</th>
                                            <th>USUARIO</th>
                                            <th>NOMBRE</th>
                                            <th>APELLIDO</th>
                                            <th>GERENCIA</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
											<td>123456</td>
                                            <td>Administrador</td>
                                            <td>vjfilippis@gmail.com</td>
                                            <td>Javier</td>
                                            <td>Filippis</td>
                                            <td>Sede Central</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="perfil-editar.php" data-toggle="tooltip" title="editar" class="btn btn-xs btn-default"><i class="fa fa-cog"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="eliminar" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
										<tr>
											<td>123456</td>
                                            <td>Gerencia</td>
                                            <td>vjfilippis@gmail.com</td>
                                            <td>Javier</td>
                                            <td>Filippis</td>
                                            <td>Sede Central</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="perfil-editar.php" data-toggle="tooltip" title="editar" class="btn btn-xs btn-default"><i class="fa fa-cog"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="eliminar" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
										<tr>
											<td>123456</td>
                                            <td>Operador</td>
                                            <td>vjfilippis@gmail.com</td>
                                            <td>Javier</td>
                                            <td>Filippis</td>
                                            <td>Sede Central</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="perfil-editar.php" data-toggle="tooltip" title="editar" class="btn btn-xs btn-default"><i class="fa fa-cog"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="eliminar" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
									<tfoot>
										<tr>
											<td colspan="8">
												<div class="btn-group btn-group-sm pull-right">
													<nav>
														<ul class="pagination">
															<li class="disabled"><a href="javascript:void(0)"><i class="fa fa-chevron-left"></i></a></li>
															<li class="active"><a href="javascript:void(0)">1</a></li>
															<li><a href="javascript:void(0)">2</a></li>
															<li><a href="javascript:void(0)">3</a></li>
															<li><a href="javascript:void(0)"><i class="fa fa-chevron-right"></i></a></li>
														</ul>
													</nav>
												</div>
											</td>
										</tr>
                    				</tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- END Page Content -->

@endsection
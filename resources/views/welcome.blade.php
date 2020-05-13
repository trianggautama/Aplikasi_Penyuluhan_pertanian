@extends('layouts.admin')

@section('content')  <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">2 Columns</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="sk-layout-2-columns.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Starter Kit</a>
                                    </li>
                                    <li class="breadcrumb-item active">2 Columns
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrum-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Description -->
                <section id="description" class="card">
                    <div class="card-header">
                        <h4 class="card-title">Description</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="card-text">
                                <p>2 Columns layout is the most common and popular layout, it has a navigation with content section. This layout
                                    use the common navbar and footer sections, however you can add customized header or footer on page level.</p>
                                <div class="alert alert-warning" role="alert">
                                    Vuexy Admin Template default layout is 2 columns. If you do not define pageConfig block on page or template
                                    level, it will consider 2 columns by default.
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Description -->
                <!-- HTML Markup -->
                <section id="html-markup" class="card">
                    <div class="card-header">
                        <h4 class="card-title">HTML Markup</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="card-text">
                                <p>This layout has a navigation and content sections with common header & footer.</p>
                                <p>Vuexy has a ready to use starter kit, you can use this layout directly by using the starter kit pages from
                                    the <code>vuexy-html-bootstrap-admin-template/starter-kit</code> folder.</p>
                                <pre class="language-html">
        <code class="language-html">
            &lt;!DOCTYPE html&gt;
              &lt;html lang="en"&gt;
                &lt;head&gt;&lt;/head&gt;
                &lt;body data-menu="vertical-menu-modern" class="vertical-layout vertical-menu-modern 2-columns navbar-floating footer-static menu-expanded"&gt;

                  &lt;!-- fixed-top--&gt;
                  &lt;nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow"&gt;
                  &lt;/nav&gt;

                  &lt;!-- BEGIN Navigation--&gt;
                  &lt;div class="main-menu menu-fixed menu-light menu-accordion menu-shadow"&gt;
                  &lt;/div&gt;
                  &lt;!-- END Navigation--&gt;

                  &lt;!-- BEGIN Content--&gt;
                  &lt;div class="app-content content"&gt;
                      &lt;div class="content-wrapper"&gt;
                      &lt;/div&gt;
                  &lt;/div&gt;
                  &lt;!-- END Content--&gt;

                  &lt;!-- START FOOTER LIGHT--&gt;
                  &lt;footer class="footer footer-static footer-light"&gt;
                  &lt;/footer&gt;
                  &lt;!-- END FOOTER LIGHT--&gt;

                &lt;/body&gt;
              &lt;/html&gt;
        </code>
        </pre>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ HTML Markup -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection

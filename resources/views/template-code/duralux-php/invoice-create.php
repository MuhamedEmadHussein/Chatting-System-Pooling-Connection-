<!DOCTYPE html>
<html lang="zxx">

    <?php $title='Duralux - Admin & Dashboard PHP Template'?>
    <?php include './partials/head.php'?>

<body>
		<!-- Left sidebar -->
        <?php include './partials/left-sidebar.php'?>
	
	<!-- Header Section Start -->
        <?php include './partials/header.php'?>
    <!--! ================================================================ !-->
    <!--! [Start] Main Content !-->
    <!--! ================================================================ !-->
    <main class="nxl-container">
        <div class="nxl-content">
            <!-- [ page-header ] start -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Invoice</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Create</li>
                    </ul>
                </div>
                <div class="page-header-right ms-auto">
                    <div class="page-header-right-items">
                        <div class="d-flex d-md-none">
                            <a href="javascript:void(0)" class="page-header-right-close-toggle">
                                <i class="feather-arrow-left me-2"></i>
                                <span>Back</span>
                            </a>
                        </div>
                        <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                            <a href="javascript:void(0);" class="btn btn-light-brand successAlertMessage">
                                <i class="feather-layers me-2"></i>
                                <span>Save as Draft</span>
                            </a>
                            <a href="javascript:void(0);" class="btn btn-primary successAlertMessage">
                                <i class="feather-save me-2"></i>
                                <span>Save Invoice</span>
                            </a>
                        </div>
                    </div>
                    <div class="d-md-none d-flex align-items-center">
                        <a href="javascript:void(0)" class="page-header-right-open-toggle">
                            <i class="feather-align-right fs-20"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- [ page-header ] end -->
            <!-- [ Main Content ] start -->
            <div class="main-content">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="card invoice-container">
                            <div class="card-header">
                                <h5>Invoice Create</h5>
                                <div class="dropdown">
                                    <a href="javascript:void(0)" class="btn btn-light-brand dropdown-toggle" data-bs-toggle="dropdown" data-bs-offset="0,25">Invoice Templates</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item active">Default</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">Simple</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">Classic</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">Modern</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">Untimate</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">Essential</a>
                                        </li>
                                        <li class="dropdown-divider"></li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">Create Template</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">Delete Template</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="px-4 pt-4">
                                    <div class="d-md-flex align-items-center justify-content-between">
                                        <div class="mb-4 mb-md-0 your-brand">
                                            <div class="wd-100 ht-100 position-relative overflow-hidden border border-gray-2 rounded">
                                                <img src="assets/images/logo-abbr.png" class="upload-pic img-fluid rounded h-100 w-100" alt="">
                                                <div class="position-absolute start-50 top-50 end-0 bottom-0 translate-middle h-100 w-100 hstack align-items-center justify-content-center c-pointer upload-button">
                                                    <i class="feather feather-camera" aria-hidden="true"></i>
                                                </div>
                                                <input class="file-upload" type="file" accept="image/*">
                                            </div>
                                            <div class="fs-12 text-muted mt-2">* Upload your brand</div>
                                        </div>
                                        <div class="d-md-flex align-items-center justify-content-end gap-4">
                                            <div class="form-group mb-3 mb-md-0">
                                                <label class="form-label">Issue Date:</label>
                                                <input id="issueDate" class="form-control" placeholder="Issue date...">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Due Date:</label>
                                                <input id="dueDate" class="form-control" placeholder="Due date...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="border-dashed">
                                <div class="px-4 row justify-content-between">
                                    <div class="col-xl-3">
                                        <div class="form-group mb-3">
                                            <label for="InvoiceLabel" class="form-label">Invoice Label</label>
                                            <input type="text" class="form-control" id="InvoiceLabel" placeholder="Duralux Invoice">
                                        </div>
                                    </div>
                                    <div class="col-xl-3">
                                        <div class="form-group mb-3">
                                            <label for="InvoiceNumber" class="form-label">Invoice Number</label>
                                            <input type="text" class="form-control" id="InvoiceNumber" placeholder="#NXL2023">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group mb-3">
                                            <label for="InvoiceProduct" class="form-label">Invoice Product</label>
                                            <input type="text" class="form-control" id="InvoiceProduct" placeholder="Product Name">
                                        </div>
                                    </div>
                                </div>
                                <hr class="border-dashed">
                                <div class="row px-4 justify-content-between">
                                    <div class="col-xl-5 mb-4 mb-sm-0">
                                        <div class="mb-4">
                                            <h6 class="fw-bold">Invoice From:</h6>
                                            <span class="fs-12 text-muted">Send an invoice and get paid</span>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label for="InvoiceName" class="col-sm-3 col-form-label">Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="InvoiceName" placeholder="Business Name">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label for="InvoiceEmail" class="col-sm-3 col-form-label">Email</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="InvoiceEmail" placeholder="Email Address">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label for="InvoicePhone" class="col-sm-3 col-form-label">Phone</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="InvoicePhone" placeholder="Enter Phone">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="InvoiceAddress" class="col-sm-3 col-form-label">Address</label>
                                            <div class="col-sm-9">
                                                <textarea rows="5" class="form-control" id="InvoiceAddress" placeholder="Enter Address"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-5">
                                        <div class="mb-4">
                                            <h6 class="fw-bold">Invoice To:</h6>
                                            <span class="fs-12 text-muted">Send an invoice and get paid</span>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label for="ClientName" class="col-sm-3 col-form-label">Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="ClientName" placeholder="Business Name">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label for="ClientEmail" class="col-sm-3 col-form-label">Email</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="ClientEmail" placeholder="Email Address">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label for="ClientPhone" class="col-sm-3 col-form-label">Phone</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="ClientPhone" placeholder="Enter Phone">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="ClientAddress" class="col-sm-3 col-form-label">Address</label>
                                            <div class="col-sm-9">
                                                <textarea rows="5" class="form-control" id="ClientAddress" placeholder="Enter Address"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="border-dashed">
                                <div class="px-4 clearfix">
                                    <div class="mb-4 d-flex align-items-center justify-content-between">
                                        <div>
                                            <h6 class="fw-bold">Add Items:</h6>
                                            <span class="fs-12 text-muted">Add items to invoice</span>
                                        </div>
                                        <div class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Informations">
                                            <i class="feather feather-info"></i>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered overflow-hidden" id="tab_logic">
                                            <thead>
                                                <tr class="single-item">
                                                    <th class="text-center">#</th>
                                                    <th class="text-center wd-450">Product</th>
                                                    <th class="text-center wd-150">Qty</th>
                                                    <th class="text-center wd-150">Price</th>
                                                    <th class="text-center wd-150">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr id="addr0">
                                                    <td>1</td>
                                                    <td><input type="text" name="product[]" placeholder="Enter Product Name" class="form-control"></td>
                                                    <td><input type="number" name="qty[]" placeholder="Enter Qty" class="form-control qty" step="1" min="1"></td>
                                                    <td><input type="number" name="price[]" placeholder="Enter Unit Price" class="form-control price" step="1.00" min="1"></td>
                                                    <td><input type="number" name="total[]" placeholder="0.00" class="form-control total" readonly=""></td>
                                                </tr>
                                                <tr id="addr1">
                                                    <td>2</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="d-flex justify-content-end gap-2 mt-3">
                                        <button id="delete_row" class="btn btn-sm bg-soft-danger text-danger">Delete</button>
                                        <button id="add_row" class="btn btn-sm btn-primary">Add Items</button>
                                    </div>
                                </div>
                                <hr class="border-dashed">
                                <div class="px-4 pb-4">
                                    <div class="form-group">
                                        <label for="InvoiceNote" class="form-label">Invoice Note:</label>
                                        <textarea rows="6" class="form-control" id="InvoiceNote" placeholder="It was a pleasure working with you and your team. We hope you will keep us in mind for future freelance projects. Thank You!"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="mb-4 d-flex align-items-center justify-content-between">
                                    <div>
                                        <h6 class="fw-bold">Grand Total:</h6>
                                        <span class="fs-12 text-muted">Grand total invoice</span>
                                    </div>
                                    <div class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Grand total invoice">
                                        <i class="feather feather-info"></i>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="tab_logic_total">
                                        <tbody>
                                            <tr class="single-item">
                                                <th class="text-dark fw-semibold">Sub Total</th>
                                                <td class="w-25"><input type="number" name="sub_total" placeholder="0.00" class="form-control border-0 bg-transparent p-0" id="sub_total" readonly=""></td>
                                            </tr>
                                            <tr class="single-item">
                                                <th class="text-dark fw-semibold">Tax</th>
                                                <td class="w-25">
                                                    <div class="input-group mb-2 mb-sm-0">
                                                        <input type="number" class="form-control border-0 bg-transparent p-0" id="tax" placeholder="0">
                                                        <div class="input-group-addon">%</div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="single-item">
                                                <th class="text-dark fw-semibold">Tax Amount</th>
                                                <td class="w-25"><input type="number" name="tax_amount" id="tax_amount" placeholder="0.00" class="form-control border-0 bg-transparent p-0" readonly=""></td>
                                            </tr>
                                            <tr class="single-item">
                                                <th class="text-dark fw-semibold bg-gray-100">Grand Total</th>
                                                <td class="bg-gray-100 w-25"><input type="number" name="total_amount" id="total_amount" placeholder="0.00" class="form-control border-0 bg-transparent p-0 fw-bolder text-dark" readonly=""></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="mb-4 d-flex align-items-center justify-content-between">
                                    <div>
                                        <h6 class="fw-bold">Payment Methord:</h6>
                                        <span class="fs-12 text-muted">Select payment methord</span>
                                    </div>
                                    <div class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Select payment methord">
                                        <i class="feather feather-info"></i>
                                    </div>
                                </div>
                                <!-- Nav tabs -->
                                <ul class="nav nav-justified gap-1">
                                    <li class="nav-item border border-gray-500">
                                        <a href="javascript:void(0);" class="nav-link px-2 active" data-bs-toggle="tab" data-bs-target="#pamymetDebitCardTab">
                                            <i class="bi bi-credit-card-fill"></i>
                                            <span class="ms-2">Debit Card</span>
                                        </a>
                                    </li>
                                    <li class="nav-item border border-gray-500">
                                        <a href="javascript:void(0);" class="nav-link px-2" data-bs-toggle="tab" data-bs-target="#pamymetPaypalTab">
                                            <i class="bi bi-paypal"></i>
                                            <span class="ms-2">Paypal</span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content mt-4">
                                    <div class="tab-pane fade show active" id="pamymetDebitCardTab" role="tabpanel">
                                        <div class="form-group mb-3">
                                            <input type="text" class="form-control input-credit-card" placeholder="Card Number">
                                            <div class="hstack justify-content-end gap-1 mt-1 input-credit-card-type">
                                                <div class="amex">
                                                    <i class="fs-12 fa-brands fa-cc-amex"></i>
                                                </div>
                                                <div class="mastercard">
                                                    <i class="fs-12 fa-brands fa-cc-mastercard"></i>
                                                </div>
                                                <div class="visa">
                                                    <i class="fs-12 fa-brands fa-cc-visa"></i>
                                                </div>
                                                <div class="discover">
                                                    <i class="fs-12 fa-brands fa-cc-discover"></i>
                                                </div>
                                                <div class="jcb">
                                                    <i class="fs-12 fa-brands fa-cc-jcb"></i>
                                                </div>
                                                <div class="diners">
                                                    <i class="fs-12 fa-brands fa-cc-diners-club"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <input type="text" class="form-control" placeholder="Card Holder Name">
                                        </div>
                                        <div class="d-flex gap-3">
                                            <div class="form-group">
                                                <input type="text" class="form-control input-date-formatting" placeholder="MM/YYYY">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control input-Blocks-formatting" placeholder="686">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pamymetPaypalTab" role="tabpanel">
                                        <p>Paypal is easiest way to pay online</p>
                                        <p>
                                            <a href="http://paypal.com" target="_blank" class="btn btn-primary"><i class="bi bi-paypal me-2"></i> Log in my Paypal</a>
                                        </p>
                                        <div class="fs-11 text-muted">Note: There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="mb-4 d-flex align-items-center justify-content-between">
                                    <div>
                                        <h6 class="fw-bold">Currency & Discount:</h6>
                                        <span class="fs-12 text-muted">Calculate your currency, tax & discount</span>
                                    </div>
                                    <div class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Calculate your currency, tax & discount">
                                        <i class="feather feather-info"></i>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <select class="form-control" data-select2-selector="currency">
                                        <option data-currency="af">AFN - Afghan Afghani - ؋</option>
                                        <option data-currency="al">ALL - Albanian Lek - Lek</option>
                                        <option data-currency="dz">DZD - Algerian Dinar - دج</option>
                                        <option data-currency="ao">AOA - Angolan Kwanza - Kz</option>
                                        <option data-currency="ar">ARS - Argentine Peso - $</option>
                                        <option data-currency="am">AMD - Armenian Dram - ֏</option>
                                        <option data-currency="aw">AWG - Aruban Florin - ƒ</option>
                                        <option data-currency="au">AUD - Australian Dollar - $</option>
                                        <option data-currency="az">AZN - Azerbaijani Manat - m</option>
                                        <option data-currency="bs">BSD - Bahamian Dollar - B$</option>
                                        <option data-currency="bh">BHD - Bahraini Dinar - .د.ب</option>
                                        <option data-currency="bd">BDT - Bangladeshi Taka - ৳</option>
                                        <option data-currency="bb">BBD - Barbadian Dollar - Bds$</option>
                                        <option data-currency="by">BYR - Belarusian Ruble - Br</option>
                                        <option data-currency="be">BEF - Belgian Franc - fr</option>
                                        <option data-currency="bz">BZD - Belize Dollar - $</option>
                                        <option data-currency="bm">BMD - Bermudan Dollar - $</option>
                                        <option data-currency="bt">BTN - Bhutanese Ngultrum - Nu.</option>
                                        <option data-currency="bt">BTC - Bitcoin - ฿</option>
                                        <option data-currency="bo">BOB - Bolivian Boliviano - Bs.</option>
                                        <option data-currency="ba">BAM - Bosnia-Herzegovina Convertible Mark - KM</option>
                                        <option data-currency="bw">BWP - Botswanan Pula - P</option>
                                        <option data-currency="br">BRL - Brazilian Real - R$</option>
                                        <option data-currency="gb">GBP - British Pound Sterling - £</option>
                                        <option data-currency="bn">BND - Brunei Dollar - B$</option>
                                        <option data-currency="bg">BGN - Bulgarian Lev - Лв.</option>
                                        <option data-currency="bi">BIF - Burundian Franc - FBu</option>
                                        <option data-currency="kh">KHR - Cambodian Riel - KHR</option>
                                        <option data-currency="ca">CAD - Canadian Dollar - $</option>
                                        <option data-currency="cv">CVE - Cape Verdean Escudo - $</option>
                                        <option data-currency="ky">KYD - Cayman Islands Dollar - $</option>
                                        <option data-currency="fr">XOF - CFA Franc BCEAO - CFA</option>
                                        <option data-currency="fr">XAF - CFA Franc BEAC - FCFA</option>
                                        <option data-currency="fr">XPF - CFP Franc - ₣</option>
                                        <option data-currency="cl">CLP - Chilean Peso - $</option>
                                        <option data-currency="cn">CNY - Chinese Yuan - ¥</option>
                                        <option data-currency="co">COP - Colombian Peso - $</option>
                                        <option data-currency="km">KMF - Comorian Franc - CF</option>
                                        <option data-currency="cd">CDF - Congolese Franc - FC</option>
                                        <option data-currency="cr">CRC - Costa Rican ColÃ³n - ₡</option>
                                        <option data-currency="hr">HRK - Croatian Kuna - kn</option>
                                        <option data-currency="cu">CUC - Cuban Convertible Peso - $, CUC</option>
                                        <option data-currency="cz">CZK - Czech Republic Koruna - Kč</option>
                                        <option data-currency="dk">DKK - Danish Krone - Kr.</option>
                                        <option data-currency="dj">DJF - Djiboutian Franc - Fdj</option>
                                        <option data-currency="do">DOP - Dominican Peso - $</option>
                                        <option data-currency="bq">XCD - East Caribbean Dollar - $</option>
                                        <option data-currency="eg">EGP - Egyptian Pound - ج.م</option>
                                        <option data-currency="er">ERN - Eritrean Nakfa - Nfk</option>
                                        <option data-currency="ee">EEK - Estonian Kroon - kr</option>
                                        <option data-currency="et">ETB - Ethiopian Birr - Nkf</option>
                                        <option data-currency="eu">EUR - Euro - €</option>
                                        <option data-currency="fk">FKP - Falkland Islands Pound - £</option>
                                        <option data-currency="fj">FJD - Fijian Dollar - FJ$</option>
                                        <option data-currency="gm">GMD - Gambian Dalasi - D</option>
                                        <option data-currency="ge">GEL - Georgian Lari - ლ</option>
                                        <option data-currency="de">DEM - German Mark - DM</option>
                                        <option data-currency="gh">GHS - Ghanaian Cedi - GH₵</option>
                                        <option data-currency="gi">GIP - Gibraltar Pound - £</option>
                                        <option data-currency="gr">GRD - Greek Drachma - ₯, Δρχ, Δρ</option>
                                        <option data-currency="gt">GTQ - Guatemalan Quetzal - Q</option>
                                        <option data-currency="gn">GNF - Guinean Franc - FG</option>
                                        <option data-currency="gy">GYD - Guyanaese Dollar - $</option>
                                        <option data-currency="ht">HTG - Haitian Gourde - G</option>
                                        <option data-currency="hn">HNL - Honduran Lempira - L</option>
                                        <option data-currency="hk">HKD - Hong Kong Dollar - $</option>
                                        <option data-currency="hu">HUF - Hungarian Forint - Ft</option>
                                        <option data-currency="is">ISK - Icelandic KrÃ³na - kr</option>
                                        <option data-currency="in">INR - Indian Rupee - ₹</option>
                                        <option data-currency="id">IDR - Indonesian Rupiah - Rp</option>
                                        <option data-currency="ir">IRR - Iranian Rial - ﷼</option>
                                        <option data-currency="iq">IQD - Iraqi Dinar - د.ع</option>
                                        <option data-currency="il">ILS - Israeli New Sheqel - ₪</option>
                                        <option data-currency="it">ITL - Italian Lira - L,£</option>
                                        <option data-currency="jm">JMD - Jamaican Dollar - J$</option>
                                        <option data-currency="jp">JPY - Japanese Yen - ¥</option>
                                        <option data-currency="jo">JOD - Jordanian Dinar - ا.د</option>
                                        <option data-currency="kz">KZT - Kazakhstani Tenge - лв</option>
                                        <option data-currency="ke">KES - Kenyan Shilling - KSh</option>
                                        <option data-currency="kw">KWD - Kuwaiti Dinar - ك.د</option>
                                        <option data-currency="kg">KGS - Kyrgystani Som - лв</option>
                                        <option data-currency="la">LAK - Laotian Kip - ₭</option>
                                        <option data-currency="lv">LVL - Latvian Lats - Ls</option>
                                        <option data-currency="lb">LBP - Lebanese Pound - £</option>
                                        <option data-currency="ls">LSL - Lesotho Loti - L</option>
                                        <option data-currency="lr">LRD - Liberian Dollar - $</option>
                                        <option data-currency="ly">LYD - Libyan Dinar - د.ل</option>
                                        <option data-currency="lt">LTL - Lithuanian Litas - Lt</option>
                                        <option data-currency="mo">MOP - Macanese Pataca - $</option>
                                        <option data-currency="mk">MKD - Macedonian Denar - ден</option>
                                        <option data-currency="mg">MGA - Malagasy Ariary - Ar</option>
                                        <option data-currency="mw">MWK - Malawian Kwacha - MK</option>
                                        <option data-currency="my">MYR - Malaysian Ringgit - RM</option>
                                        <option data-currency="mv">MVR - Maldivian Rufiyaa - Rf</option>
                                        <option data-currency="mr">MRO - Mauritanian Ouguiya - MRU</option>
                                        <option data-currency="mu">MUR - Mauritian Rupee - ₨</option>
                                        <option data-currency="mx">MXN - Mexican Peso - $</option>
                                        <option data-currency="md">MDL - Moldovan Leu - L</option>
                                        <option data-currency="mn">MNT - Mongolian Tugrik - ₮</option>
                                        <option data-currency="ma">MAD - Moroccan Dirham - MAD</option>
                                        <option data-currency="mz">MZM - Mozambican Metical - MT</option>
                                        <option data-currency="mm">MMK - Myanmar Kyat - K</option>
                                        <option data-currency="na">NAD - Namibian Dollar - $</option>
                                        <option data-currency="np">NPR - Nepalese Rupee - ₨</option>
                                        <option data-currency="nl">ANG - Netherlands Antillean Guilder - ƒ</option>
                                        <option data-currency="tw">TWD - New Taiwan Dollar - $</option>
                                        <option data-currency="nz">NZD - New Zealand Dollar - $</option>
                                        <option data-currency="ni">NIO - Nicaraguan CÃ³rdoba - C$</option>
                                        <option data-currency="ng">NGN - Nigerian Naira - ₦</option>
                                        <option data-currency="kp">KPW - North Korean Won - ₩</option>
                                        <option data-currency="no">NOK - Norwegian Krone - kr</option>
                                        <option data-currency="om">OMR - Omani Rial - .ع.ر</option>
                                        <option data-currency="pk">PKR - Pakistani Rupee - ₨</option>
                                        <option data-currency="pa">PAB - Panamanian Balboa - B/.</option>
                                        <option data-currency="pg">PGK - Papua New Guinean Kina - K</option>
                                        <option data-currency="py">PYG - Paraguayan Guarani - ₲</option>
                                        <option data-currency="pe">PEN - Peruvian Nuevo Sol - S/.</option>
                                        <option data-currency="ph">PHP - Philippine Peso - ₱</option>
                                        <option data-currency="pl">PLN - Polish Zloty - zł</option>
                                        <option data-currency="qa">QAR - Qatari Rial - ق.ر</option>
                                        <option data-currency="ro">RON - Romanian Leu - lei</option>
                                        <option data-currency="ru">RUB - Russian Ruble - ₽</option>
                                        <option data-currency="rw">RWF - Rwandan Franc - FRw</option>
                                        <option data-currency="sv">SVC - Salvadoran ColÃ³n - ₡</option>
                                        <option data-currency="ws">WST - Samoan Tala - SAT</option>
                                        <option data-currency="sa">SAR - Saudi Riyal - ﷼</option>
                                        <option data-currency="sr">RSD - Serbian Dinar - din</option>
                                        <option data-currency="sc">SCR - Seychellois Rupee - SRe</option>
                                        <option data-currency="sl">SLL - Sierra Leonean Leone - Le</option>
                                        <option data-currency="sg">SGD - Singapore Dollar - $</option>
                                        <option data-currency="sk">SKK - Slovak Koruna - Sk</option>
                                        <option data-currency="sb">SBD - Solomon Islands Dollar - Si$</option>
                                        <option data-currency="so">SOS - Somali Shilling - Sh.so.</option>
                                        <option data-currency="za">ZAR - South African Rand - R</option>
                                        <option data-currency="kr">KRW - South Korean Won - ₩</option>
                                        <option data-currency="lk">LKR - Sri Lankan Rupee - Rs</option>
                                        <option data-currency="sh">SHP - St. Helena Pound - £</option>
                                        <option data-currency="sd">SDG - Sudanese Pound - .س.ج</option>
                                        <option data-currency="sr">SRD - Surinamese Dollar - $</option>
                                        <option data-currency="sz">SZL - Swazi Lilangeni - E</option>
                                        <option data-currency="se">SEK - Swedish Krona - kr</option>
                                        <option data-currency="ch">CHF - Swiss Franc - CHf</option>
                                        <option data-currency="sy">SYP - Syrian Pound - LS</option>
                                        <option data-currency="st">STD - São Tomé and Príncipe Dobra - Db</option>
                                        <option data-currency="tj">TJS - Tajikistani Somoni - SM</option>
                                        <option data-currency="tz">TZS - Tanzanian Shilling - TSh</option>
                                        <option data-currency="th">THB - Thai Baht - ฿</option>
                                        <option data-currency="to">TOP - Tongan pa'anga - $</option>
                                        <option data-currency="tt">TTD - Trinidad & Tobago Dollar - $</option>
                                        <option data-currency="tn">TND - Tunisian Dinar - ت.د</option>
                                        <option data-currency="tr">TRY - Turkish Lira - ₺</option>
                                        <option data-currency="tm">TMT - Turkmenistani Manat - T</option>
                                        <option data-currency="ug">UGX - Ugandan Shilling - USh</option>
                                        <option data-currency="ua">UAH - Ukrainian Hryvnia - ₴</option>
                                        <option data-currency="ae">AED - United Arab Emirates Dirham - إ.د</option>
                                        <option data-currency="uy">UYU - Uruguayan Peso - $</option>
                                        <option data-currency="us" selected>USD - US Dollar - $</option>
                                        <option data-currency="uz">UZS - Uzbekistan Som - лв</option>
                                        <option data-currency="vu">VUV - Vanuatu Vatu - VT</option>
                                        <option data-currency="ve">VEF - Venezuelan BolÃ­var - Bs</option>
                                        <option data-currency="vn">VND - Vietnamese Dong - ₫</option>
                                        <option data-currency="ye">YER - Yemeni Rial - ﷼</option>
                                        <option data-currency="zm">ZMK - Zambian Kwacha - ZK</option>
                                    </select>
                                </div>
                                <div class="form-group mb-4">
                                    <input type="number" id="itemDiscount" class="form-control" placeholder="Discount">
                                </div>
                                <div class="ps-0 mb-3 form-check form-switch form-switch-sm d-flex align-center justify-content-between">
                                    <label class="fw-bold text-dark" for="LateFees">
                                        <span>Late Fees</span>
                                        <span class="fs-11 fw-normal text-muted d-block">Late fees for extra charge</span>
                                    </label>
                                    <input class="form-check-input" type="checkbox" id="LateFees" checked="checked">
                                </div>
                                <div class="ps-0 mb-3 form-check form-switch form-switch-sm d-flex align-center justify-content-between">
                                    <label class="fw-bold text-dark" for="ClientNote">
                                        <span>Client Notes</span>
                                        <span class="fs-11 fw-normal text-muted d-block">Client notes for further query</span>
                                    </label>
                                    <input class="form-check-input" type="checkbox" id="ClientNote">
                                </div>
                                <div class="ps-0 form-check form-switch form-switch-sm d-flex align-center justify-content-between">
                                    <label class="fw-bold text-dark" for="SavePayment">
                                        <span>Save Payment</span>
                                        <span class="fs-11 fw-normal text-muted d-block">Save payment for quick payout</span>
                                    </label>
                                    <input class="form-check-input" type="checkbox" id="SavePayment">
                                </div>
                            </div>
                        </div>
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="mb-4 d-flex align-items-center justify-content-between">
                                    <div>
                                        <h6 class="fw-bold">Cancel Invoce</h6>
                                        <span class="fs-12 text-muted">Cancel invoice for ever.</span>
                                    </div>
                                    <a href="javascript:void(0);" class="btn btn-light-brand">Nevermind</a>
                                </div>
                                <p class="fs-12 text-muted mb-4">Are you sure you want to cancel this invoice? Neigther you nor alex will able to make any(more) payments on it.</p>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="notifyMe" checked="">
                                    <label class="custom-control-label c-pointer" for="notifyMe">Notify alex that this invoice was cancelled.</label>
                                </div>
                                <a href="javascript:void(0);" class="btn bg-soft-danger text-danger mt-4 successAlertMessage">Cancel this Invoice</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Main Content ] end -->
        </div>
        <!-- [ Footer ] start -->
        <?php include './partials/footer.php'?>
        <!-- [ Footer ] end -->
    </main>
    <!--! ================================================================ !-->
    <!--! [End] Main Content !-->
    <!--! ================================================================ !-->
	<?php include './partials/theme-customizer.php'?>
	<!--<< All JS Plugins >>-->
	<?php include './partials/script.php'?>	
    <script>
        $(document).ready(function() {
            var i = 1;
            $("#add_row").click(function() {
                b = i - 1;
                $("#addr" + i)
                    .html($("#addr" + b).html())
                    .find("td:first-child")
                    .html(i + 1);
                $("#tab_logic").append('<tr id="addr' + (i + 1) + '"></tr>');
                i++;
            });
            $("#delete_row").click(function() {
                if (i > 1) {
                    $("#addr" + (i - 1)).html("");
                    i--;
                }
                calc();
            });
            $("#tab_logic tbody").on("keyup change", function() {
                calc();
            });
            $("#tax").on("keyup change", function() {
                calc_total();
            });
        });

        function calc() {
            $("#tab_logic tbody tr").each(function(i, element) {
                var html = $(this).html();
                if (html != "") {
                    var qty = $(this).find(".qty").val();
                    var price = $(this).find(".price").val();
                    $(this)
                        .find(".total")
                        .val(qty * price);
                    calc_total();
                }
            });
        }

        function calc_total() {
            total = 0;
            $(".total").each(function() {
                total += parseInt($(this).val());
            });
            $("#sub_total").val(total.toFixed(2));
            tax_sum = (total / 100) * $("#tax").val();
            $("#tax_amount").val(tax_sum.toFixed(2));
            $("#total_amount").val((tax_sum + total).toFixed(2));
        }
    </script>
</body>

</html>
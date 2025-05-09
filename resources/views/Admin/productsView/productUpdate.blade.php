@extends('Admin.component.adminMain')

@section('adminContent')
        <!-- ==================================================== -->
        <!-- Start right Content here -->
        <!-- ==================================================== -->
        <div class="page-content">

            <!-- Start Container Fluid -->
            <div class="container-xxl">

                <div class="row">
                    <div class="col-xl-3 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('admin/images/product/p-1.png') }}" alt="" class="img-fluid rounded bg-light">
                                <div class="mt-3">
                                    <h4>Men Black Slim Fit T-shirt <span class="fs-14 text-muted ms-1">(Fashion)</span></h4>
                                    <h5 class="text-dark fw-medium mt-3">Price :</h5>
                                    <h4 class="fw-semibold text-dark mt-2 d-flex align-items-center gap-2">
                                        <span class="text-muted text-decoration-line-through">$100</span> $80 <small class="text-muted"> (30% Off)</small>
                                    </h4>
                                    <div class="mt-3">
                                        <h5 class="text-dark fw-medium">Size :</h5>
                                        <div class="d-flex flex-wrap gap-2" role="group" aria-label="Basic checkbox toggle button group">
                                            <input type="checkbox" class="btn-check" id="size-s">
                                            <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="size-s">S</label>

                                            <input type="checkbox" class="btn-check" id="size-m" checked>
                                            <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="size-m">M</label>

                                            <input type="checkbox" class="btn-check" id="size-xl">
                                            <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="size-xl">Xl</label>

                                            <input type="checkbox" class="btn-check" id="size-xxl">
                                            <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="size-xxl">XXL</label>

                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <h5 class="text-dark fw-medium">Colors :</h5>
                                        <div class="d-flex flex-wrap gap-2" role="group" aria-label="Basic checkbox toggle button group">
                                            <input type="checkbox" class="btn-check" id="color-dark">
                                            <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="color-dark"> <i class="bx bxs-circle fs-18 text-dark"></i></label>

                                            <input type="checkbox" class="btn-check" id="color-yellow">
                                            <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="color-yellow"> <i class="bx bxs-circle fs-18 text-warning"></i></label>

                                            <input type="checkbox" class="btn-check" id="color-white">
                                            <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="color-white"> <i class="bx bxs-circle fs-18 text-white"></i></label>

                                            <input type="checkbox" class="btn-check" id="color-red">
                                            <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="color-red"> <i class="bx bxs-circle fs-18 text-danger"></i></label>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-light-subtle">
                                <div class="row g-2">
                                    <div class="col-lg-6">
                                        <a href="#!" class="btn btn-outline-secondary w-100">Create Product</a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="#!" class="btn btn-primary w-100">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-9 col-lg-8 ">
                    <form method="post" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Add Product Photo</h4>
                                </div>
                                <div class="card-body">
                                    <!-- File Upload -->
                                    <div class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews" data-upload-preview-template="#uploadPreviewTemplate">
                                        <div class="fallback">
                                            <input name="images[]" type="file" multiple />
                                        </div>
                                        <div class="dz-message needsclick">
                                            <i class="bx bx-cloud-upload fs-48 text-primary"></i>
                                            <h3 class="mt-4">Drop your images here, or <span class="text-primary">click to browse</span></h3>
                                            <span class="text-muted fs-13">
                                                1600 x 1200 (4:3) recommended. PNG, JPG and GIF files are allowed
                                            </span>
                                        </div>
                                    </div>
                                    @error('images')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Product Information</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div>
                                                <div class="mb-3">
                                                    <label for="product-name" class="form-label">Product Name</label>
                                                    <input value="{{ old('name', $product->name) }}" type="text" name="name" id="product-name" class="form-control" placeholder="Items Name">
                                                    @error('name')
                                                    <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div>
                                                <div class="mb-3">
                                                    <label for="product-brand" class="form-label">Brand</label>
                                                    <input value="{{ old('brand', $product->brand) }}" type="text" name="brand" id="product-brand" class="form-control" placeholder="Brand Name">
                                                    @error('brand')
                                                    <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- Product Categories -->
                                        <div class="col-lg-6">
                                            <div>
                                                <label for="product-categories" class="form-label">Product Categories</label>
                                                <select class="form-control" id="product-categories" data-placeholder="Select Category" name="category_id">
                                                    <option value="">Choose a category</option>
                                                    @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}" {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}> {{ $category->name }} </option>
                                                    @endforeach
                                                </select>
                                                @error('category_id')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Product Subcategories -->
                                        <div class="col-lg-6">
                                            <div>
                                                <label for="product-subcategories" class="form-label">Product Subcategories</label>
                                                <select class="form-control" id="product-subcategories" data-placeholder="Select Subcategory" name="subcategory_id">
                                                    <option value="">Choose a subcategory</option>
                                                </select>
                                                @error('subcategory_id')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Include jQuery -->
                                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                    <script>
                                        $(document).ready(function() {
                                            $('#product-categories').change(function() {
                                                var categoryId = $(this).val();

                                                if (categoryId) {
                                                    $.ajax({
                                                        url: '/get-subcategories/' + categoryId, // Route to fetch subcategories
                                                        type: 'GET',
                                                        success: function(data) {
                                                            $('#product-subcategories').empty().append('<option value="">Choose a subcategory</option>');
                                                            $.each(data, function(key, value) {
                                                                $('#product-subcategories').append('<option value="' + value.id + '">' + value.name + '</option>');
                                                            });
                                                        }
                                                    });
                                                } else {
                                                    $('#product-subcategories').empty().append('<option value="">Choose a subcategory</option>');
                                                }
                                            });
                                        });
                                    </script>


                                    <div class="row mb-4">
                                        <div class="col-lg-4">
                                            <div class="mt-3">
                                                <h5 class="text-dark fw-medium">Size :</h5>
                                                <div class="d-flex flex-wrap gap-2" role="group" aria-label="Basic checkbox toggle button group">
                                                    <input  type="checkbox" name="size[]" value="xs" class="btn-check" id="size-xs1" {{ in_array('xs', old('size', explode(',', $product->size))) ? 'checked' : '' }}>
                                                    <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="size-xs1" {{ in_array('xs', old('size', explode(',', $product->size))) ? 'checked' : '' }}>XS</label>

                                                    <input  type="checkbox" name="size[]" value="s" class="btn-check" id="size-s1">
                                                    <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="size-s1" {{ in_array('s', old('size', explode(',', $product->size))) ? 'checked' : '' }}>S</label>

                                                    <input  type="checkbox" name="size[]" value="m" class="btn-check" id="size-m1">
                                                    <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="size-m1" {{ in_array('m', old('size', explode(',', $product->size))) ? 'checked' : '' }}>M</label>

                                                    <input  type="checkbox" name="size[]" value="xl" class="btn-check" id="size-xl1">
                                                    <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="size-xl1" {{ in_array('xl', old('size', explode(',', $product->size))) ? 'checked' : '' }}>Xl</label>

                                                    <input  type="checkbox" name="size[]" value="xxl" class="btn-check" id="size-xxl1">
                                                    <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="size-xxl1" {{ in_array('xxl', old('size', explode(',', $product->size))) ? 'checked' : '' }}>XXL</label>
                                                    <input  type="checkbox" name="size[]" value="xxxl" class="btn-check" id="size-3xl1">
                                                    <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="size-3xl1" {{ in_array('xxxl', old('size', explode(',', $product->size))) ? 'checked' : '' }}>3XL</label>
                                                </div>
                                                @error('size')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="mt-3">
                                                <h5 class="text-dark fw-medium">Colors :</h5>
                                                <div class="d-flex flex-wrap gap-2" role="group" aria-label="Basic checkbox toggle button group">
                                                    <input  type="checkbox" name="color[]" value="dark" class="btn-check" id="color-dark1">
                                                    <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="color-dark1" {{ in_array('dark', old('color', explode(',', $product->color))) ? 'checked' : '' }}> <i class="bx bxs-circle fs-18 text-dark"></i></label>

                                                    <input  type="checkbox" name="color[]" value="yellow" class="btn-check" id="color-yellow1">
                                                    <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="color-yellow1" {{ in_array('yellow', old('color', explode(',', $product->color))) ? 'checked' : '' }}> <i class="bx bxs-circle fs-18 text-warning"></i></label>

                                                    <input  type="checkbox" name="color[]" value="white" class="btn-check" id="color-white1">
                                                    <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="color-white1" {{ in_array('white', old('color', explode(',', $product->color))) ? 'checked' : '' }}> <i class="bx bxs-circle fs-18 text-white"></i></label>

                                                    <input  type="checkbox" name="color[]" value="red" class="btn-check" id="color-red1">
                                                    <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="color-red1" {{ in_array('red', old('color', explode(',', $product->color))) ? 'checked' : '' }}> <i class="bx bxs-circle fs-18 text-primary"></i></label>

                                                    <input  type="checkbox" name="color[]" value="green" class="btn-check" id="color-green1">
                                                    <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="color-green1" {{ in_array('green', old('color', explode(',', $product->color))) ? 'checked' : '' }}> <i class="bx bxs-circle fs-18 text-success"></i></label>

                                                    <input  type="checkbox" name="color[]" value="blue" class="btn-check" id="color-blue1">
                                                    <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="color-blue1" {{ in_array('blue', old('color', explode(',', $product->color))) ? 'checked' : '' }}> <i class="bx bxs-circle fs-18 text-danger"></i></label>

                                                    <input  type="checkbox" name="color[]" value="sky" class="btn-check" id="color-sky1">
                                                    <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="color-sky1" {{ in_array('sky', old('color', explode(',', $product->color))) ? 'checked' : '' }}> <i class="bx bxs-circle fs-18 text-info"></i></label>

                                                    <input  type="checkbox" name="color[]" value="gray" class="btn-check" id="color-gray1">
                                                    <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="color-gray1" {{ in_array('gray', old('color', explode(',', $product->color))) ? 'checked' : '' }}> <i class="bx bxs-circle fs-18 text-secondary"></i></label>

                                                </div>
                                                @error('color')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label for="description" class="form-label">Description</label>
                                                <textarea class="form-control bg-light-subtle" value="{{ old('description', $product->description) }}" name="description" id="description" rows="7" placeholder="Short description about the product"></textarea>
                                            </div>
                                            @error('description')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div>
                                                <div class="mb-3">
                                                    <label for="product-id" class="form-label">Tag Number (Optional)</label>
                                                    <input value="" type="number" id="product-id" class="form-control" placeholder="#******">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div>
                                                <div class="mb-3">
                                                    <label for="product-stock" class="form-label">Stock</label>
                                                    <input value="{{ old('stock', $product->stock) }}" type="number" name="stock" id="product-stock" class="form-control" placeholder="Quantity">
                                                    @error('stock')
                                                    <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="product-stock" class="form-label">Material</label>
                                            <select class="form-control" id="choices-multiple-remove-button" data-choices data-choices-removeItem name="material" multiple>
                                                <option value="Cotton" selected>Cotton</option>
                                                <option value="Washenware">Washenware</option>
                                                <option value="Laun">Laun</option>
                                                <option value="khudur">Khudur</option>
                                            </select>
                                            @error('material')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Pricing Details</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div>
                                                <label for="product-price" class="form-label">Price</label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text fs-20"><i class='bx bx-dollar'></i></span>
                                                    <input type="number" value="{{ old('price', $product->price) }}" name="price" id="product-price" class="form-control" placeholder="000">
                                                </div>
                                                @error('price')
                                                    <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div>
                                                <label for="product-discount" class="form-label">Discount</label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text fs-20"><i class='bx bxs-discount'></i></span>
                                                    <input value="{{ old('discount', $product->discount) }}" type="number" name="discount" id="product-discount" class="form-control" placeholder="000">
                                                    @error('discount')
                                                    <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div>
                                                <label for="product-tex" class="form-label">Tex (Optional)</label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text fs-20"><i class='bx bxs-file-txt'></i></span>
                                                    <input value="" type="number" name="tex" id="product-tex" class="form-control" placeholder="000">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 bg-light mb-3 rounded">
                                <div class="row justify-content-end g-2">
                                    <div class="col-lg-2">
                                        <button type="submit" class="btn btn-outline-secondary w-100">Create Product</button>
                                    </div>
                                    <div class="col-lg-2">
                                        <a href="#!" class="btn btn-primary w-100">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <!-- End Container Fluid -->

            <!-- ========== Footer Start ========== -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 text-center">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> &copy; Larkon. Crafted by <iconify-icon icon="iconamoon:heart-duotone" class="fs-18 align-middle text-danger"></iconify-icon> <a href="https://1.envato.market/techzaa" class="fw-bold footer-text" target="_blank">Techzaa</a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- ========== Footer End ========== -->

        </div>
        <!-- ==================================================== -->
        <!-- End Page Content -->
        <!-- ==================================================== -->


    @endsection

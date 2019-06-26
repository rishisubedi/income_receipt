
@extends('frontend.layouts.app')

@section('title',"Income Receipt")
@section('content')

<div class="container-fluid">	
	<div class="row setting-menu">	
		<ul class="nav nav-tabs" id="setting-tab" role="tablist">
			<li class="nav-item">
			<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
			aria-selected="true">Add Category</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" id="profile-tab" data-toggle="tab" href="#manageCategory" role="tab" aria-controls="profile"
			aria-selected="false">Manage Category</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" id="contact-tab" data-toggle="tab" href="#addSubCategory" role="tab" aria-controls="contact"
			aria-selected="false">Add Sub Category</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" id="contact-tab" data-toggle="tab" href="#manageSubCategory" role="tab" aria-controls="contact"
			aria-selected="false">Manage Sub Category</a>
			</li>
		</ul>
	</div>	

	<div class="row setting-content">	
		<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
  	<form class="addCategoryFrom" action="{{ route('saveCategory') }}" method="post">
  		 @csrf
          <p class="form-title">Add Category</p>
      		<div class="form-group">	
      				<label>	Enter Category Name</label>
      				<input class="form-control" type="text" required name="catName">
      		</div>	
      		<div class="form-group">	
      				<label>Enter Category Type</label>
      				<input class="form-control" name="catType">	</input>
      		</div>	
      		<button class="btn btn-primary" type="submit">Save Details</button>
      </form>
  </div>
    <div class="tab-pane fade" id="manageCategory" role="tabpanel" aria-labelledby="abc-tab">
  	 <table class="table table-hover table-fixed">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Category Type</th>
      <th scope="col">Add/Edit Category</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Home and Land Tax</td>
      <td type="button" class="btn btn-primary"> Add</td>
      <td></td>
    </tr>
  </tbody>
</table>
  </div>
  <div class="tab-pane fade" id="addSubCategory" role="tabpanel" aria-labelledby="abc-tab">
  	 <form class="addCategoryFrom" action= "{{ route('saveSubCategory') }}" method="post">
      @csrf

      <p class="form-title">Add Sub Category</p>
			<div class="form-group">
				<label>Choose Category</label>
				<select class="form-control" name="category">
					<option value="1">Option 1</option>
				</select>
			</div>
      		<div class="form-group">	
      				<label>	Enter Sub Category Name</label>
      				<input class="form-control" type="text" name="subCatName">
      		</div>	
      		<div class="form-group">	
      				<label>Enter Sub Category Type</label>
      				<input class="form-control" name="subCatType">	</input>
      		</div>	
      		<button class="btn btn-primary">Save Details</button>
  </div>
  <div class="tab-pane fade" id="manageSubCategory" role="tabpanel" aria-labelledby="contact-tab">
  <table class="table table-hover table-fixed">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Subcategory Type</th>
      <th scope="col">Add/Edit sub Category</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Home and Land Tax</td>
      <td type="button" class="btn btn-primary" action="{{route('add')}}"> Add</td>
      <td></td>
    </tr>
  </tbody>
</table>
  	</div>
  	
  </div>
</div>

	</div>


</div>

      
@endsection





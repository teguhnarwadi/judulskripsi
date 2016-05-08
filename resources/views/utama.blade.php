@extends('layouts.main')

@section('content')

<style type="text/css">
        #custom-search-form {
        margin:0;
        margin-top: 5px;
        padding: 0;
    }
 
    #custom-search-form .search-query {
        padding-right: 3px;
        padding-right: 4px \9;
        padding-left: 3px;
        padding-left: 4px \9;
        /* IE7-8 doesn't have border-radius, so don't indent the padding */
 
        margin-bottom: 0;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        -webkit-transition: width  0.2s ease-in-out;
	    -moz-transition:width  0.2s ease-in-out;
	    -o-transition: width  0.2s ease-in-out;
	    transition: width  0.2s ease-in-out;
    }
 
    #custom-search-form button {
        border: 0;
        background: none;
        /** belows styles are working good */
        padding: 2px 5px;
        margin-top: 2px;
        position: relative;
        left: -28px;
        /* IE7-8 doesn't have border-radius, so don't indent the padding */
        margin-bottom: 0;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
    }
 
    .search-query:focus + button {
        z-index: 3;   
    }   
    .search-query:focus{
        width: 260px;
    }   

    .row-setting {
    	margin-top: 15px;
    }

    .centered-text {
    	text-align:center
	} 

</style>

<div class="container">
	<div class="row row-setting ">
        <div class="span12">

        	<h2 class="centered-text">Bingung??? Cari aja dibawah . . .</h2>

        	<!-- Form Search -->
        	<div class="col-md-4 col-md-offset-4">
        		<form id="custom-search-form" class="form-search form-horizontal">
                <div class="input-group col-md-12">
                	<span class="input-group-btn">
                    <input type="text" class="form-control input-lg" placeholder="Search">
                    	<button class="btn btn-danger" type="submit">
                    		<span class="glyphicon glyphicon-search"></span>
                  		</button>
                    </span>

                </div>
            </form>  
            <!-- <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#filter-panel">
	        	<span class="glyphicon glyphicon-cog"></span> Advanced Search
	    	</button>  -->

        	</div>  

        	<div class="col-md-2 col-md-offset-6 ">
            	<a data-toggle="collapse" data-target="#filter-panel" class="btn btn-link" style="">Advanced Search . . . . . . .</a>
	    	</div>

        </div>
	</div>

	<div class="row row-setting ">
		<div class="span12">
			<!-- Advance Search -->
            <div id="filter-panel" class="collapse filter-panel">
	            <div class="panel panel-default">
	                <div class="panel-body">
	                    <form class="form-inline" role="form">
	                        <div class="form-group">
	                            <label class="filter-col" style="margin-right:0;" for="pref-perpage">Rows per page:</label>
	                            <select id="pref-perpage" class="form-control">
	                                <option value="2">2</option>
	                                <option value="3">3</option>
	                                <option value="4">4</option>
	                                <option value="5">5</option>
	                                <option value="6">6</option>
	                                <option value="7">7</option>
	                                <option value="8">8</option>
	                                <option value="9">9</option>
	                                <option selected="selected" value="10">10</option>
	                                <option value="15">15</option>
	                                <option value="20">20</option>
	                                <option value="30">30</option>
	                                <option value="40">40</option>
	                                <option value="50">50</option>
	                                <option value="100">100</option>
	                                <option value="200">200</option>
	                                <option value="300">300</option>
	                                <option value="400">400</option>
	                                <option value="500">500</option>
	                                <option value="1000">1000</option>
	                            </select>                                
	                        </div> <!-- form group [rows] -->
	                        <div class="form-group">
	                            <label class="filter-col" style="margin-right:0;" for="pref-search">Search:</label>
	                            <input type="text" class="form-control input-sm" id="pref-search">
	                        </div><!-- form group [search] -->
	                        <div class="form-group">
	                            <label class="filter-col" style="margin-right:0;" for="pref-orderby">Order by:</label>
	                            <select id="pref-orderby" class="form-control">
	                                <option>Descendent</option>
	                            </select>                                
	                        </div> <!-- form group [order by] --> 
	                        <div class="form-group">    
	                            <div class="checkbox" style="margin-left:10px; margin-right:10px;">
	                                <label><input type="checkbox"> Remember parameters</label>
	                            </div>
	                            <button type="submit" class="btn btn-default filter-col">
	                                <span class="glyphicon glyphicon-record"></span> Save Settings
	                            </button>  
	                        </div>
	                    </form>
	                </div>
	            </div>
        	</div>    
	        
		</div>
	</div>

	<div class="row row-setting">
		<div class="col-sm-4"><h4>Popular judul</h4>
			<p>asdasd asdasd asdasd asdasd asdasd asdasd asdasd asdasd asdasd asdasd asdasd asdasd
				asdasd asdasd asdasd asdasd asdasd asdasd asdasd asdasd asdasd asdasd asdasd asdasd
			 	asdasd asdasd asdasd asdasd asdasd asdasd asdasd asdasd asdasd asdasd asdasd asdasd</p>	
		</div>
	  	<div class="col-sm-4"><h4>Newest judul</h4>
	  		<p>asdasd asdasd asdasd asdasd asdasd asdasd asdasd asdasd asdasd asdasd asdasd asdasd
				asdasd asdasd asdasd asdasd asdasd asdasd asdasd asdasd asdasd asdasd asdasd asdasd
			 	asdasd asdasd asdasd asdasd asdasd asdasd asdasd asdasd asdasd asdasd asdasd asdasd</p>
	  	</div>
	  	<div class="col-sm-4"><h4>.col-sm-4</h4>
	  		<p>asdasd asdasd asdasd asdasd asdasd asdasd asdasd asdasd asdasd asdasd asdasd asdasd
				asdasd asdasd asdasd asdasd asdasd asdasd asdasd asdasd asdasd asdasd asdasd asdasd
			 	asdasd asdasd asdasd asdasd asdasd asdasd asdasd asdasd asdasd asdasd asdasd asdasd</p>
	  	</div>
	</div>

</div>



@endsection
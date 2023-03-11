@extends('Templates.default')


@section('body')

       
        
        <!-- Portfolio-->
        <div id="portfolio">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    @foreach ($png as $item)
                        <div class="col-lg-4 col-sm-6">
                            <a class="portfolio-box" href="assets/img/portfolio/fullsize/1.jpg" title="Project Name">
                                <img class="img-fluid" src="{{$item}}" alt="..." />
                                <div class="portfolio-box-caption">
                                    <div class="project-category text-white-50">Category</div>
                                    <div class="project-name">Project Name</div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        
        <section class="mt10">
                <div class="overflow--auto relative">
                    <table class="w-96 mx-auto text-sm text-left text-gray-500">
                        <thead class="text-xs text-gra-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="py-3 px-6">
                                    Web Name
                                </th>
                                
                                <th scope="col" class="py-3 px-6">
                                    
                                </th>

                                
                                <th scope="col" class="py-3 px-6">
                                    
                                </th>
                            </tr>
                        </thead>
        
                        <tbody>
                            @foreach ($Datas as $student)
                                <tr class="bg-gray-800 border-b">
                                    <td class="py-3 px-6">
                                        {{$student -> WebName}}
                                    </td>
                                    <td class="py-3 px-6 bg-blue-600" >
                                        <a href="/UpdatePage/{{$student->id}}" class="bg-blue-600 text-black px-4 py-1">Update</a>
                                    </td>
                                    <td class="py-3 px-6">
                                     <form action="/DeleteData/{{$student->id}}" method="POST">
                                        @csrf
                                        @method('delete')
                                    
                                         <button type="submit">Delete</button>
                                        </form>                                       
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </section>
        
      
      
      @if (session()->has('message'))

      <script>
        alert("{{session('message')}}");
        </script>


          
      @endif 
       
@endsection
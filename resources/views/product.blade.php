<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <title>show Laravel</title>
</head>

<body>

    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6 ">
            <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Show Product</h2>
                {{-- <p class="font-light text-gray-500 lg:mb-16 sm:text-xl dark:text-gray-400">Explore the whole collection
                    of
                    open-source web components and elements built with the utility classes from Tailwind</p> --}}
                    <a href="{{url('/')}}" class=" my-10 text-decoration-none inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                       Insert Product
                    </a>
            </div>
            <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-2">
                @foreach ($data as $data)
                    
                <div class="items-center w-100 bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                    <a href="# w-50">
                        <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg"
                            src="product/{{$data->image}}"
                            alt="Bonnie Avatar">
                    </a>
                    <div class="p-5 w-50">
                        <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                            <a href="#">{{$data->title}}</a>
                        </h3>
                        <span class="text-gray-500 dark:text-gray-400">CEO & Web Developer</span>
                        <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">{{$data->description}}</p>
                        <ul class="flex space-x-4 sm:mt-0">
                            <li>
                                <a  href ="{{url('delete_product', $data->id)}}" class="inline-flex p-1 text-white bg-red-500 border-0  focus:outline-none hover:bg-red-600 rounded text-lg">
                                    <svg class="w-5 h-5  text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                      </svg>
                                </a>
                            </li>
                            <li>
                                <a  href ="{{url('edit_product', $data->id)}}" class="inline-flex p-1 text-white bg-blue-500 border-0  focus:outline-none hover:bg-blue-600 rounded text-lg">
                                    <svg class="w-5 h-5 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.3 4.8 2.9 2.9M7 7H4a1 1 0 0 0-1 1v10c0 .6.4 1 1 1h11c.6 0 1-.4 1-1v-4.5m2.4-10a2 2 0 0 1 0 3l-6.8 6.8L8 14l.7-3.6 6.9-6.8a2 2 0 0 1 2.8 0Z"/>
                                      </svg>
                                </a>
                            </li>
                         
                        </ul>
                    </div>
                </div>
                @endforeach
              
            </div>
        </div>
    </section>

</body>

</html>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
            href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"
            rel="stylesheet"
        />
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        />
        <title>Insert Laravel</title>
    </head>
    <body>
        <div class="justify-center items-center text-center">
            <h1 class="font-md text-1xl text-capitalize">Add Product</h1>

            <form class="max-w-sm mx-auto text-end" action="{{url('/add_product')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-5">
                    <label
                        for="title"
                        class="block mb-2 text-sm font-medium text-capitalize text-gray-900 dark:text-white"
                        >title</label
                    >
                    <input
                        type="title"
                        id="title"
                        name="title"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="name@flowbite.com"
                        required
                    />
                </div>
                <div class="mb-5">
                    <label
                        for="description"
                        class="block mb-2 text-sm font-medium text-capitalize text-gray-900 dark:text-white"
                        >description</label
                    >
                    <textarea
                        id="description"
                        name="description"
                        rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Leave a comment..."
                    ></textarea>
                </div>
                <div class="mb-5">
                    <label
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                        for="image"
                        >Upload file</label
                    >
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="image"
                        name="image"
                        type="file"
                    />
                </div>
                <button
                    type="submit"
                    name="insertBTN"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                >
                    Submit
                </button>
            </form>
        </div>
    </body>
</html>

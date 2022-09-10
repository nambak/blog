<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex flex-col mt-8">
            <div class="py-2">
                <a href="{{ route('posts.create') }}">
                    <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Write Post</button>
                </a>
                <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                Id
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Title
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Updated
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Action
                            </th>
                        </tr>
                        </thead>

                        <tbody>
                        @forelse($posts as $post)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <div class="flex items-center">
                                        <div class="ml-4">
                                            <div class="text-sm text-gray-900">
                                                {{ $post->id }}
                                            </div>
                                        </div>
                                    </div>
                                </th>

                                <td class="py-4 px-6">
                                    <div class="text-sm text-gray-900">
                                        {{ $post->title }}
                                    </div>
                                </td>

                                <td class="py-4 px-6">
                                    <button wire:click="edit({{ $post->id }})" class="px-4 py-2 text-white bg-blue-600">
                                        Edit
                                    </button>
                                </td>

                                <td class="py-4 px-6">
                                    <button wire:click="destroy({{ $post->id }})"
                                            class="px-4 py-2 text-white bg-red-600">
                                        Delete
                                    </button>
                                </td>

                            </tr>
                        @empty
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-6 py-6 border-b border-gray-200 text-center" colspan="4">No posts</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</div>


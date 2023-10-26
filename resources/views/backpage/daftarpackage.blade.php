<x-admin-layout>
    <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
            <h6>{{$title}}</h6>
        </div>
        <div class="flex-auto px-0 pt-0 pb-2">
            <div class="flex justify-between items-center p-4"> 
                <div>
                    <a href="{{route('package.create')}}">
                        <button class="bg-white mr-2 hover:bg-gray-100 text-sm text-gray-800 font-semibold py-1 px-2 border border-gray-400 rounded shadow">Add</button>
                    </a>
                    <button class="bg-white mr-2 hover:bg-gray-100 text-sm text-gray-800 font-semibold py-1 px-2 border border-gray-400 rounded shadow">Publish</button>
                    <button style="color: red;" class="bg-white mr-2 hover:bg-gray-100 text-sm text-red-900 font-semibold py-1 px-2 border border-gray-400 rounded shadow">Delete</button>
                </div>
                    <form action="{{route('package.index')}}" method="GET" class="flex items-center space-x-4">
                        <select id="community_id" name="community_id" class="block w-full py-2 px-4 border border-gray-300 bg-white rounded-1-2x1 shadow-sm focus:outline-none focus:ring-indigo-500">
                            <option value="">Choose Community</option>
                            @foreach ($communities as $item)
                                <option value="{{ $item->community_id }}" 
                                    {{ (isset($_GET['community_id']) && $_GET['community_id'] == $item->community_id) ? 'selected' : '' }}>
                                    {{ $item->community_name }}
                                </option>
                            @endforeach
                        </select>

                        <input type="text" name="s" value="{{(isset($_GET['s']))?$_GET['s']:''}}" class="px-4 py-2 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Search...">

                        <button type="submit" class="ml-4 bg-white hover:bg-gray-100 text-sm text-gray-800 font-semibold py-1 px-2 border border-gray-400 rounded shadow">Search</button>
                    </form>
            </div>
        </div>
        <div class="p-0 overflow-x-auto">
            <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                <thead class="align-bottom">
                    <tr>
                        <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Packages</th>
                        <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Code</th>
                        <th class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-gray-200 border-solid shadow-none tracking-none whitespace-nowrap text-slate-400 opacity-70">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($packages as $key=>$item)
                    <tr>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                            <div class="flex px-2 py-1">
                                <div>
                                    <img src="{{asset($item->feature_img)}}" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl" alt="user1" />
                                </div>
                                <div class="flex flex-col justify-center">
                                    <h6 class="mb-0 text-sm leading-normal">{{$item->package_name}}</h6>
                                    <p class="mb-0 text-xs leading-tight text-slate-400">{{$item->community->community_name}}</p>
                                </div>
                            </div>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                            {{$item->package_code}}
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                            <a href="{{route('package.edit',$item->package_id)}}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            <form action="{{route('package.destroy',$item->package_id)}}" method="POST">
                                @csrf @method('DELETE')
                                <button class="text-red-600 hover:text-red-900" onclick="return confirm('Anda Yakin?')" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @if (\Illuminate\Support\Facades\Request::path() == 'package')
        <div class="m-4">
            Showing {{ $packages->firstItem() }} to {{ $packages->lastItem() }} of {{ $packages->total() }} results
        </div>
        <div class="m-4"> 
            {{$packages->appends(request()->query())->links()}}
        </div>
    @endif
    </div>
</div>

</x-admin-layout>
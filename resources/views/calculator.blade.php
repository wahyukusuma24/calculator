<x-case-layout>
    <div
        class="flex bg-slate-800 p-4 rounded-md justify-center items-center text-2xl border-4 border-purple-800 flex-col shadow-2xl shadow-purple-500/50">
        <form action="/" class="w-full" method="post">
            @csrf
            <input type="text" name="textView"
                class="w-full bg-inherit text-indigo-600 border-none focus:ring-0 text-right text-2xl mb-8"
                value={{ $num ?? '' }}>
            <table>
                <tbody>
                    <tr class="flex justify-center items-center mb-3">
                        <td><button class="bg-indigo-600 w-16 h-16 rounded-full mr-3 cursor-pointer hover:bg-indigo-500"
                                type="submit" name="op" value="AC">AC</button></td>
                        <td><button class="bg-indigo-600 w-16 h-16 rounded-full mr-3 cursor-pointer hover:bg-indigo-500"
                                type="submit" name="submit" value="-">min</button></td>
                        <td><button class="bg-indigo-600 w-16 h-16 rounded-full mr-3 cursor-pointer hover:bg-indigo-500"
                                type="submit" name="op" value="%">%</button></td>
                        <td><button class="bg-purple-700 w-16 h-16 rounded-full cursor-pointer hover:bg-purple-600"
                                type="submit" name="op" value="/">/</button></td>
                    </tr>
                    <tr class="flex justify-center items-center mb-3">
                        <td><button class="bg-slate-400 w-16 h-16 rounded-full mr-3 cursor-pointer hover:bg-slate-300"
                                type="submit" name="submit" value="7">7</button></td>
                        <td><button class="bg-slate-400 w-16 h-16 rounded-full mr-3 cursor-pointer hover:bg-slate-300"
                                type="submit" name="submit" value="8">8</button></td>
                        <td><button class="bg-slate-400 w-16 h-16 rounded-full mr-3 cursor-pointer hover:bg-slate-300"
                                type="submit" name="submit" value="9">9</button></td>
                        <td><button class="bg-purple-700 w-16 h-16 rounded-full cursor-pointer hover:bg-purple-600"
                                type="submit" name="op" value="X">X</button></td>
                    </tr>
                    <tr class="flex justify-center items-center mb-3">
                        <td><button class="bg-slate-400 w-16 h-16 rounded-full mr-3 cursor-pointer hover:bg-slate-300"
                                type="submit" name="submit" value="4">4</button></td>
                        <td><button class="bg-slate-400 w-16 h-16 rounded-full mr-3 cursor-pointer hover:bg-slate-300"
                                type="submit" name="submit" value="5">5</button></td>
                        <td><button class="bg-slate-400 w-16 h-16 rounded-full mr-3 cursor-pointer hover:bg-slate-300"
                                type="submit" name="submit" value="6">6</button></td>
                        <td><button class="bg-purple-700 w-16 h-16 rounded-full cursor-pointer hover:bg-purple-600"
                                type="submit" name="op" value="-">-</button></td>
                    </tr>
                    <tr class="flex justify-center items-center mb-3">
                        <td><button class="bg-slate-400 w-16 h-16 rounded-full mr-3 cursor-pointer hover:bg-slate-300"
                                type="submit" name="submit" value="1">1</button></td>
                        <td><button class="bg-slate-400 w-16 h-16 rounded-full mr-3 cursor-pointer hover:bg-slate-300"
                                type="submit" name="submit" value="2">2</button></td>
                        <td><button class="bg-slate-400 w-16 h-16 rounded-full mr-3 cursor-pointer hover:bg-slate-300"
                                type="submit" name="submit" value="3">3</button></td>
                        <td><button class="bg-purple-700 w-16 h-16 rounded-full cursor-pointer hover:bg-purple-600"
                                type="submit" name="op" value="+">+</button></td>
                    </tr>
                    <tr class="flex justify-center items-center mb-3">
                        <td><button
                                class="bg-slate-400 w-36 h-16 rounded-full mr-3 text-left pl-8 cursor-pointer hover:bg-slate-300"
                                type="submit" name="submit" value="0">0</button></td>
                        <td><button class="bg-slate-400 w-16 h-16 rounded-full mr-3 cursor-pointer hover:bg-slate-300"
                                type="submit" name="submit" value=".">,</button></td>
                        <td><button class="bg-purple-700 w-16 h-16 rounded-full cursor-pointer hover:bg-purple-600"
                                type="submit" name="equals" value="=">=</button></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</x-case-layout>

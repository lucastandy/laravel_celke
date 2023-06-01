<x-layout title='Editar Máquina'>
    
    <a href="{{route('machines.index')}}">Listar</a>

    <h1>Editar Máquina</h1>

    
    <form action="{{route('machines.update',$machine->id)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" placeholder="Nome da máquina" value="{{$machine->name}}"><br><br>

        <button type="submit">Salvar</button>
    </form>
    
</x-layout>

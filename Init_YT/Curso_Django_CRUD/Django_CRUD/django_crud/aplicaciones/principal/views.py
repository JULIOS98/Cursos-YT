from django.shortcuts import render,redirect
from .models import Persona
from .forms import PersonaFormCreate

#Vista basadas en funciones

#Request = Peticion
def index(request):
    personas = Persona.objects.all()
    context = {
        
        'personas' : personas,
    }
    print(personas)
    return render(request, 'index.html',context)

def create(request):
    if request.method == 'GET':
        form = PersonaFormCreate
        context = {
            
            'form':form
        }
    else:
        form = PersonaFormCreate(request.POST)
        context = {
            
            'form':form
        }
        print(form)
        if form.is_valid():
            form.save()
            return redirect('index')
    return render(request, 'create.html',context)

def update(request, id):
    persona = Persona.objects.get(id = id)
    if request.method == 'GET':
        form = PersonaFormCreate(instance = persona)
        context = {
            
            'form':form
        }
    else:
        form = PersonaFormCreate(request.POST, instance = persona)
        context = {
            'form':form
        }
        print(form)
        if form.is_valid():
            form.save()
            return redirect('index')
    return render(request, 'create.html', context)

def delete(request,id):
    persona = Persona.objects.get(id = id)
    persona.delete()
    return redirect('index')

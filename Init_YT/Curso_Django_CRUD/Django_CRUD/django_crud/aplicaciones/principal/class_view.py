from django.shortcuts import render,redirect
from django.views.generic import CreateView,UpdateView,ListView,DeleteView
from django.urls import reverse_lazy 

from .forms import PersonaFormCreate
from .models import Persona


#Vista basadas en clases

class PersonaList(ListView):
    model = Persona
    template_name = 'index.html'

    def get_queryset(self):
        return self.model.objects.all()[:2]

class PersonaCreate(CreateView):
    model = Persona
    form_class = PersonaFormCreate
    template_name = 'create.html'
    success_url = reverse_lazy('index')
    
class PersonaUpdate(UpdateView):
    model = Persona
    form_class = PersonaFormCreate
    template_name = 'create.html'
    success_url = reverse_lazy('index')

class PersonaDelete(DeleteView):
    model = Persona
    template_name = 'verificacion.html'
    success_url = reverse_lazy('index')
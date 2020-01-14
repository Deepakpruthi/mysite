from django.urls import path
from . import views

urlpatterns = [
path("", views.home, name="home"),
path("home/", views.home, name="home"),
path("create/", views.create, name="create"),
path("profit_loss/", views.profit_loss, name="profit_loss"),
path("kpi/", views.profit_loss, name="kpi"),
path("kpi_settings/", views.profit_loss, name="kpi_settings"),
path("dashboard/", views.profit_loss, name="dashboard"),
path("<int:id>", views.index, name="index"),
]
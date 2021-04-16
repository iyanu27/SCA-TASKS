Deploy a PHP application on kubernetes (using Deployment, services, configmaps)

1. Installing kind
====
curl -Lo ./kind https://kind.sigs.k8s.io/dl/v0.8.1/kind-linux-amd64
chmod +x ./kind
sudo mv ./kind /usr/local/bin

or
curl -Lo ./kind "https://kind.sigs.k8s.io/dl/v0.10.0/kind-$(uname)-amd64"
chmod +x ./kind
mv ./kind /some-dir-in-your-PATH/kind

choco install kind

2. How to start it?
Install docker first
sudo apt-get update
sudo apt-get install docker.io
sudo mv ./kind  SCA-TASKS/kind

To create cluster
./kind create cluster

After that install kubetcl with the command 
sudo snap install kubectl --classic
 sudo kubectl cluster-info --context kind-kind


kubectl expose deployment nginx --type=LoadBalancer --port=8080


sudo kubectl get pods 

sudo kubectl describe pod nginx-56896b4645-czqjt   
kubectl get storageclass

kubectl describe pod php-b74879d8-g8ss5  -to know whats wrong with the pod


https://kubernetes.io/docs/tasks/configure-pod-container/configure-persistent-volume-storage/

====
apiVersion: v1
kind: PersistentVolume
metadata:
  name: task-pv-volume
  labels:
    type: local
spec:
  storageClassName: manual
  capacity:
    storage: 10Gi
  accessModes:
    - ReadWriteOnce
  hostPath:
    path: "/mnt/data"


kubectl apply -f https://k8s.io/examples/pods/storage/pv-volume.yaml

kubectl get pv task-pv-volume

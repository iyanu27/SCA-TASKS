# Automating a KUBENTETES CLUSTER  with Terraform ON GCP

## Requirements
1. Google Cloud Platform(GCP) Project
2. GCP service account private key
3. Google Compute Engine
4. Terraform (for automating resource creation)

A GCP project can have up to five VPC networks, and each Compute Engine instance belongs to one VPC network. If interested in the Terraform [GCP provider](https://www.terraform.io/docs/providers/google/index.html) docs or more generally about Terraform resources read [here](https://www.terraform.io/docs/configuration/resources.html).

### Terraform Installation
1. Copy link address for [Terraform](https://www.terraform.io/downloads.html) download
  ```
    $ wget https://releases.hashicorp.com/terraform/0.12.16/terraform_0.12.16_darwin_amd64.zip
    $ unzip terraform_0.12.16_darwin_amd64.zip
    $ mv terraform Downloads/
    $ vim ~/.profile
    Add `export PATH="$PATH:~/Downloads"` to ~/.profile
  ```
2. Verify installation: `$ terraform` or `$ terraform --version`
3. `$ mkdir -p ~/terraform/vpc`

### Google Cloud Platform
1. [Create project](https://console.cloud.google.com/projectcreate) from GCP console
2. From the GCP main menu ☰ > Enable the Compute Engine API
3. Navigate to Credentials from the left panel and select **Create Credentials** > choose **Service account key** from the dropdown > **New service account**:
      + Choose a name and set role to **Editor**
      + **JSON** > **Create**
      + Now the private key will download to your local machine.
4. [Install](https://cloud.google.com/sdk/docs/downloads-interactive) the [gcloud CLI](https://cloud.google.com/sdk/gcloud/). For Linux/Mac:

  ```
    $ curl https://sdk.cloud.google.com | bash
    $ exec -l $SHELL
    $ gcloud init
  ```
5. From `~/terraform/vpc`, create a Terraform config file, `main.tf`, with the following configuration:

      + **Note:** You will need to edit the values of the following argument names (credentials, project)

  ```
    provider "google" {
      credentials = file("<FILE_PATH>.json")         

      project = "<PROJECT_ID>"              
      region  = "us-west1"
      zone    = "us-west1-a"
    }

 6. To provision the Kubernetes cluster copy the gke.tf  
  ```

7. `$ terraform init`
    + You should now see `Terraform has been successfully initialized!`
8. `$ terraform apply` and enter 'yes' to continue. 
  ![image](https://user-images.githubusercontent.com/57386428/113719657-b629e780-96a2-11eb-852a-6a9266f11e2c.png)

    + You should now see `Apply complete! Resources: 2 added, 0 changed, 0 destroyed.`
    + From the GCP console you can see your newly created VM instance, substituting <PROJECT_ID>: 
    `https://console.cloud.google.com/compute/instances?project=<PROJECT_ID>` 
9. After that go to connect and paste the following on cloud shell
  
    gcloud container clusters get-credentials my-first-gke-cluster --zone us-west1-a --project keen-clarity-309414
10. Then install kubectl
    sudo apt-get install kubectl
 11. Then run the following to get the node
      kubectl get node
      <img width="838" alt="gke" src="https://user-images.githubusercontent.com/57386428/113719550-94306500-96a2-11eb-9fc4-288898f56c5a.PNG">

# InfinityCommerce Ω-X Multicloud DevOps Stack

This repository provides a minimal example for managing infrastructure and deployments across AWS, Azure and GCP. The goal is to demonstrate how Terraform, ArgoCD and GitHub Actions can work together in a multicloud setup.

## Directory Layout

- **terraform/** – Terraform modules for each cloud provider.
- **argocd/** – ArgoCD application manifests.
- **ci-cd/** – Example workflow for automatically applying Terraform.
- **github/** – Standard GitHub Actions workflows.
- **githubworkflows/** – Additional workflow examples.
- **monitoring/** – Sample monitoring configuration.

## Terraform Setup

1. Install [Terraform](https://www.terraform.io/).
2. Choose a provider directory under `terraform/` (`aws`, `azure` or `gcp`).
3. Run the usual Terraform commands:

```bash
cd terraform/aws # or azure/gcp
terraform init
terraform plan
terraform apply
```

The module files included here are only placeholders. Extend them with the resources required for your environment.

## Running ArgoCD

ArgoCD application definitions live in `argocd/applications`. Apply the manifests to your cluster:

```bash
kubectl apply -f argocd/applications/aws.yaml   # or azure.yaml / gcp.yaml
```

This will register each cloud-specific application with ArgoCD.

## GitHub Actions Workflows

- `.github/workflows/exe.yml` builds a Node.js project into a Windows executable using `pkg`.
- `githubworkflows/generar-binarios.yml` is a similar example in another directory.
- `ci-cd/terraform-auto-apply.yml` sketches a pipeline for automatically applying Terraform changes.

Use these files as starting points for your own automation.

## Contributing

Please see [CONTRIBUTING.md](CONTRIBUTING.md) for guidelines on how to help.

## License

This project is released under the [MIT License](LICENSE).

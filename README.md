## Sample project to test the checklist stuff

Goals of this project are to build a flexible yet accessible way to create templates and then generated complex
nested groups of tasks that can be completed etc.

[Some notes here](https://docs.google.com/document/d/1BdSj4MDW7C_9Y8Vdymq6eUtPC-RQnfw_M6z3s0s7i90/edit)

### Scenario 1 - Employee Onboarding Checklist

- Job Offer Form (revisions of documents) (r)
  - Job Offer Acceptance Form Once this is approved the prior step is completed (r) (hellosign)
    - Employee Contract (pdf signed and scanned) (r) (helloSign)
    - Employee NDA (r)
      - Tax Form (pdf form scanned) (contract must be approved, NDA Signed)  (r)
        - Bank Payroll Information (tax form must be approved) (r) (marks checklist complete!)
      - Emergency Contact Form (important once employee contract signed) (optional)

#### Thoughts on scenario 1
- Could we assume that each checklistitem has 4 states:  Waiting | Active(Not Started | In Progress) | Completed
- Could we assume that each checklistitem has 5 dependencies:  None |  (All) Active | (Any) Active | (All) Completed | (Any) Completed
- Dependencies are an array, item would check template dependencies


### Useful links
https://flaviocopes.com/update-npm-dependencies/

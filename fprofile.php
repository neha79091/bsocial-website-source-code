//Time complexity:O(N) where N is the number of nodes in the tree.
//Space Complexity:O(1)
//In this problem, I'll be checking if root is either equal to p or q. In that case, My root will be the LCA. Then I'll recursively traverse through the right and the left half of the tree and repeat the process. If both the right and left are not null, then the root will be the LCA. Else, if left is not null and right is null, then left value will be the LCA, else right will be the LCA.
class Solution {
   public TreeNode lowestCommonAncestor(TreeNode root, TreeNode p, TreeNode q) {
       if(root==null){
           return null;}
       if(root==p||root==q){
           return root;
       }
       TreeNode left=lowestCommonAncestor(root.left,p,q);
       TreeNode right=lowestCommonAncestor(root.right,p,q);
       if(left!=null&&right!=null){
           return root;
       }
       else if(left!=null){
           return left;
       }
       else{
           return right;
       }
   }
}
python code:
class Solution:
	def lowestCommonAncestor(self, root: 'TreeNode', p: 'TreeNode', q: 'TreeNode') -> 'TreeNode':
		# Time Complexity : O(n) because we are traversing through all the elements of the tree
		# Space Complexity : Constant if we don't consider recursive stack
		# base case
		if root == None or root == p or root == q:
			return root
		left = self.lowestCommonAncestor(root.left, p, q)
		right = self.lowestCommonAncestor(root.right, p, q)
		if left != None and right != None:
			return root
		elif left != None:
			return left
		elif right != None:
			return right
		return None


